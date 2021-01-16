<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .login-form {
            width: 340px;
            margin: 50px auto;
            font-size: 15px;
        }

        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<?php
session_start();
$error=array();
$error['pass'] = "";
$error['user'] = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('processsignup.php');
}
?>

<body>
    <div class="login-form">
        <form action="signup.php" method="post">
            <h2 class="text-center">Sign Up</h2>
            <div class="form-group">
                <input name="username" type="text" class="form-control" placeholder="Username" required="required">
            </div>
            <div class="form-group">
                <input name="password1" type="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <input name="password2" type="password" class="form-control" placeholder="Password" required="required">
                <label class="text-danger"><?php echo $error['pass']; ?></label>
            </div>
            <div class="form-group">
                <label class="text-danger" for="submit"><?php echo $error['user'];?></label>
                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
            </div>
        </form>
        <p class="text-center">Have an account <a href="login.php">Login</a></p>
    </div>
</body>

</html>