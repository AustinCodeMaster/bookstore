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
<?php
class forms
{
    public function signup()
    {
?>

<body>
        <form method="post" action="/bookstore/Global/validateForm.php" id="signUp">
            <div class="container-fluid">
                <h2>Sign Up</h2>
                <p>Sign Up to make online purchases, view books and make reservations</p>
                <div class="mb-3">
                    <label for="fullname">Full name:</label>
                    <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Wesley Ogam" aria-label="Fullname" aria-describedby="basic-addon1">
                </div>
                <div class="mb-3">
                    <label for="email">Email: </label>
                    <input type="text" id="email" name="email" class="form-control" required aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="mb-3">
                    <label for="password">Password: </label>
                    <input type="text" id="password" name="password" class="form-control" required aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="mb-3">
                    <?php $this->submit_button("Sign Up", "signup"); ?> <a href="#">Already have an account? Log in</a>
                </div>
            </div>
        </form>
</body>

    <?php
    }

    private function submit_button($value, $name)
    {
    ?>
        <button type="submit" class="btn btn-primary" name="<?php echo $name; ?>" value="<?php echo $value; ?>"><?php echo $value ?></button>
    <?php
    }
    public function signin()
    {
    ?>
        <form method="get" action="/bookstore/Global/validateForm.php" id="signin">
            <div class="container-fluid">
                <h2>Sign in</h2>
                <p>Glad to see you back.</p>
                <div class="mb-3">
                    <label for="fullname">Fullname: </label>
                    <input type="text" id="fullname" name="fullname" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password">Password:</label>
                    <input type="password" name="password" required class="form-control">
                </div>
                <!--<div class="mb-3">
                    <input type="submit" value="log in"><a href="#signUp">Don't have an account? Sign up</a>
                </div>-->
                <div class="mb-3">
                    <?php $this->submit_button("Sign In", "signin"); ?> <a href="#">Don't have an account, Sign up</a>
                </div>


        </form>

        </div>

<?php
    }
}