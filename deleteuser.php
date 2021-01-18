<?php
session_start();
if(isset($_SESSION['username']))
{
    if($_SESSION['level']==1)
    {
        include('model/connect.php');
        $user=$_GET['user'];
        $sql1="DELETE FROM about WHERE username='$user';";
        mysqli_query($conn,$sql1);
        $sql1="DELETE FROM perskills WHERE username='$user';";
        mysqli_query($conn,$sql1);
        $sql1="DELETE FROM proskills WHERE username='$user';";
        mysqli_query($conn,$sql1);
        $sql1="DELETE FROM home WHERE username='$user';";
        mysqli_query($conn,$sql1);
        $sql1="DELETE FROM experience WHERE username='$user';";
        mysqli_query($conn,$sql1);
        $sql1="DELETE FROM education WHERE username='$user';";
        mysqli_query($conn,$sql1);
        $sql1="DELETE FROM user WHERE username='$user';";
        mysqli_query($conn,$sql1);
        header("location:admin.php");
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
?>