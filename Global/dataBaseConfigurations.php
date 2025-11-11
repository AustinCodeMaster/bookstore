<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

class dataBaseConfigurations
{
    private $conn;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $this->conn = new mysqli(
            $_ENV['DB_HOST'],
            $_ENV['DB_USER'],
            $_ENV['DB_PASS'],
            $_ENV['DB_NAME']
        );

        if ($this->conn->connect_error) {
            die("Database connection failed: " . $this->conn->connect_error);
        }
    }

    public function databaseinsertion()
    {
        // Get form inputs safely
        $fullName = $_POST['fullName'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $confirmPassword = $_POST['confirmPassword'] ?? '';

        if (empty($fullName) || empty($email) || empty($password) || empty($confirmPassword)) {
            echo "Please fill in all fields.";
            return;
        }


        // Hash the password securely
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare SQL statement (prevents SQL injection)
        $stmt = $this->conn->prepare("INSERT INTO users (name, email, password_hash) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $fullName, $email, $hashedPassword);

        // Execute query
        if ($stmt->execute()) {
            echo "✅ User registered successfully!";
        } else {
            echo "❌ Error: " . $stmt->error;
        }

        $stmt->close();
    }
    public function userLogin()
    {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if (empty($email) || empty($password)) {
            echo "Please fill in all fields.";
            return;
        }

        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            echo "No user found with that email.";
            return;
        }

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password_hash'])) {
            echo "Login successful! Welcome, " . htmlspecialchars($user['name']) . ".";
            // You can now start a session or redirect
        } else {
            echo "Incorrect password.";
        }
    }
}
