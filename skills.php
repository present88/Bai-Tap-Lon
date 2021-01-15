<?php
    $color=['bg-success','bg-info','bg-warning','bg-danger'];
    $sql = "SELECT * FROM proskills WHERE username = '$username';";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $proskills = mysqli_fetch_all($result);
    }
    $sql = "SELECT * FROM perskills WHERE username = '$username';";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $perskills = mysqli_fetch_all($result);
    }
?>