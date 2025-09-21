<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="<?php echo "Welcome"; ?>/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
    <form id="signupForm" method="get" action="/bookstore/Global/validateForm.php">
        <div>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" class="signin-btn">Sign In</button>
        </div>
    </form>
    <div class="signup-link">
        Don't have an account? <a href="#" id="signupLink">Sign up here</a>
    </div>
</body>

</html>