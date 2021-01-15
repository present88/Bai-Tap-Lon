<?php
    $sql = "SELECT * FROM home WHERE username = '$user';";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) == 1){
        $result = mysqli_fetch_array($query);
        $avatar = $result['avatar'];
        $name = $result['name'];
        $job = $result['job'];
        $fb = $result['fb'];
        $tw = $result['tw'];
        $gg = $result['gg'];
        $insta = $result['insta'];
    }
    else{
        echo "Lỗi";
    }
?>