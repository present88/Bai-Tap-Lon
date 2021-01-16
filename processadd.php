<?php
session_start();
if (isset($_SESSION['username'])) {
    if (isset($_GET['table'])) {
        $username = $_SESSION['username'];
        $table = $_GET['table'];
        include('connect.php');
        if ($table == 'proskills' || $table == 'perskills') {
            $skillname = $_POST['skillname'];
            $percent = $_POST['percent'];
            $sql = "insert into $table (username,skillname,percent) values('$username','$skillname','$percent') ";
            mysqli_query($conn, $sql);
            header("location:admin.php");
        } else if ($table == 'education' || $table == 'experience') {
            $name = ($table == 'education') ? 'schoolname' : 'jobname';
            $data = $_POST['name'];
            $time = $_POST['time'];
            $mess = $_POST['mess'];
            $sql = "insert into $table (username,$name,time,mess) values ('$username','$data','$time','$mess')";
            mysqli_query($conn, $sql);
            header("location:admin.php");
        }
    }
} else {
    header("location:login.php");
}
