<?php
session_start();
if(isset($_SESSION['username']))
{
    if(isset($_GET['table']) && isset($_GET['id']))
    {
        $username=$_SESSION['username'];
        $table=$_GET['table'];
        $id=$_GET['id'];
        include('model/connect.php');
        $sql="delete from $table where id=$id and username='$username'";
        mysqli_query($conn,$sql);
        header("location:profile.php");
    }
    else
    {
        header("location:profile.php");
    }
}
else
{
    header("location:login.php");
}