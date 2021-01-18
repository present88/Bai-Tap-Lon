<?php
include('model/connect.php');
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
if ($password1 != $password2) {
    $error['pass'] = "re-enter password error";
}
$sql = "select * from user where username='$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    $error['user'] = "username already exists";
}
if ($error['user']=="" && $error['pass']=="") {
    $sql = "insert into user values ('$username','$password1',0)";
    $result = mysqli_query($conn, $sql);
    $sql = "insert into home (username,avatar) values ('$username','image/default.png')";
    $result = mysqli_query($conn, $sql);
    $sql = "insert into about(username) values ('$username')";
    $result = mysqli_query($conn, $sql);
    echo"<script>
    alert('Sign Up Success,Please Login');
    </script>";
}
?>