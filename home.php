<?php
    $sql = "SELECT * FROM home WHERE username = '$username';";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1){
        $home = mysqli_fetch_array($result);
    }
?>