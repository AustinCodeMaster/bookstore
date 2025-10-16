<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="<?php echo "Welcome"; ?>/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
    <div class="signup-header">
        <h1>Create Account</h1>
        <p>Join the BookStore Community Today</p>
    </div>


       
    <form id="signupForm" method="post" action="/bookstore/Global/validateForm.php">

        <div>
            <label for="fullName">Full Name</label>
            <input type="text" id="fullname" name="fullName" required>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <label for="confirmPassword">Confirm Password</label>
            <input type="confirmPassword" id="confirmPassword" name="confirmPassword" required>
            <button type="submit" class="signup-btn">Create Account</button>
        </div>
    </form>
    <div class="login-link">
        Already have an account? <a href="#" id="loginLink">Sign in here</a>
    </div>
</body>

</html>