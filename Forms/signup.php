<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div class="signup-header">
        <h1>Create Account</h1>
        <p>Join the BookStore Community Today</p>
    </div>


    <form id="signupForm">
        <div>
            <label for="firstName">First Name</label>
            <input type="text" id="firstname" name="firstName" required>
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastName" required>
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
