<?php
$educations;
$sql = "SELECT * FROM education WHERE username = '$user';";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    $educations = mysqli_fetch_all($result);
}

?>