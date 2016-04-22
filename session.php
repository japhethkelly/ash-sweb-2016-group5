<?php
//session_start();
$check=$_SESSION['uname'];
if($check=="")
{
header("Location:logIn.php");
}
?>