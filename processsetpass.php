<?php
session_start();
include('model/connect.php');
if (isset($_SESSION['username'])) {
    if ($_SESSION['level'] == 1) {
        $username = $_POST['username'];
        $newpass1 = $_POST['newpass1'];
        $sql = "update user set password='$newpass1' where username='$username'";
        $result = mysqli_query($conn, $sql);
        echo "<script>
alert('update password success');
window.location='admin.php';
</script>";
    } else {
        header("location:profile.php");
    }
} else {
    header("location:login.php");
}
