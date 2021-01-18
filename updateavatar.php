<?php
session_start();
if(isset($_SESSION['username']))
{
    $username=$_SESSION['username'];
    $extension = explode(".", $_FILES["avt"]["name"]);
    $extension = end($extension);
    $avatar="image/". $username.".".$extension;
    if ((($_FILES["avt"]["type"] == "image/gif")
        || ($_FILES["avt"]["type"] == "image/jpeg")
        || ($_FILES["avt"]["type"] == "image/png")
        || ($_FILES["avt"]["type"] == "image/pjpeg"))) {
        move_uploaded_file($_FILES["avt"]["tmp_name"],$avatar);
    }
    include('model/connect.php');
    $sql="update home set avatar='$avatar' where username='$username'";
    mysqli_query($conn,$sql);
    header("location:profile.php");
}
else
{
    header("location:login.php");
}
