<?php
session_start();
if(isset($_SESSION['username']))
{
    if(isset($_GET['table']))
    {
        $username=$_SESSION['username'];
        $table=$_GET['table'];
        include('connect.php');
        if($table=='home')
        {
            $name=$_POST['name'];
            $job=$_POST['job'];
            $fb=$_POST['fb'];
            $tw=$_POST['tw'];
            $gg=$_POST['gg'];
            $insta=$_POST['insta'];
            $sql="update home set name='$name',job='$job',fb='$fb',tw='$tw',gg='$gg',insta='$insta' where username='$username'";
            mysqli_query($conn,$sql);
            header("location:admin.php");
        }
        else if($table=='about')
        {
            $intro=$_POST['intro'];
            $age=$_POST['age'];
            $sex=$_POST['sex'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];
            $hobby=$_POST['hobby'];
            $language=$_POST['language'];
            $sql="update about set intro='$intro',age=$age,sex='$sex',email='$email',phone='$phone',address='$address',hobby='$hobby',language='$language' where username='$username'";
            mysqli_query($conn,$sql);
            header("location:admin.php");
        }
        else if($table=='proskills' ||$table=='perskills')
        {
            $id=$_POST['id'];
            $skillname=$_POST['skillname'];
            $percent=$_POST['percent'];
            $sql="update $table set skillname='$skillname',percent='$percent' where username='$username' and id=$id";
            mysqli_query($conn,$sql);
            header("location:admin.php");
        }
        else if($table=='education' ||$table=='experience')
        {
            $name=($table=='education')?'schoolname':'jobname';         
            $data=$_POST['name'];
            $id=$_POST['id'];
            $time=$_POST['time'];
            $mess=$_POST['mess'];
            $sql="update $table set $name='$data',time='$time',mess='$mess' where username='$username' and id=$id";
            mysqli_query($conn,$sql);
            header("location:admin.php");
        }
    }
}
else
{
    header("location:login.php");
}
?>