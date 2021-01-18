<?php
$username=$_POST['username'];
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$cvmail=$_POST['cvmail'];
$result=mail($cvmail,"Someone contact you","Name:$name
Email:$email
Message:$message");
if($result)
{
echo"<script>
alert('send mail success');
window.location='$username';
</script>";
}
else
{
    echo"<script>
alert('send mail error');
window.location='$username';
</script>";
}
?>