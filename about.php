<?php
    $sql = "SELECT * FROM about WHERE username = '$username';";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1){
        $about = mysqli_fetch_array($result);
    }
?>