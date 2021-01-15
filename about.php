<?php
    $sql = "SELECT * FROM about WHERE username = 'present';";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) == 1){
        $result = mysqli_fetch_array($query);
        $intro = $result['intro'];
        $age = $result['age'];
        $sex = $result['sex'];
        $email = $result['email'];
        $phone = $result['phone'];
        $address = $result['address'];
        $hobby = $result['hobby'];
        $language = $result['language'];
    }
    else{
        echo "Lỗi";
    }
?>