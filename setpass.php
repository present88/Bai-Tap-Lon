<?php
session_start();
if (isset($_SESSION['username']) && isset($_GET['user'])) {
    if ($_SESSION['level'] == 1) {
        $user = $_GET['user'];
    } else {
        header("location:profile.php");
    }
} else {
    header("location:login.php");
}
?>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/ajax-3.3.1.min.js"></script>
<div class="container" align="center">
    <h2 class="text-uppercase">Set Password</h2>
    <div class="col-8">
        <form action="processsetpass.php" method="post">
            <table class="table table-hover table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Usernname</th>
                        <td><input type="text" readonly class="form-control" name="username" value="<?php echo $user; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Password</th>
                        <td><input type="text" class="form-control" name="newpass1"></td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Update</button>
            <a name="" id="" class="btn btn-secondary" href="admin.php" role="button">Cancel</a>
        </form>
    </div>
</div>