<?php
session_start();
// $_SESSION['contact']['email']= "abc.@gmail.com";
echo "<pre>";
$email=$_SESSION['contact']['email'] ?? "";
echo $email;
?>