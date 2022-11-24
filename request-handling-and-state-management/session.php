<?php
session_start();
echo "<pre>";
$_SESSION["userName"]="Jamal";
$_SESSION["password"]="fskfjs";
$_SESSION["contact"]=array("phone"=>"0293", "email"=>"jamal@gmail.com");
print_r($_SESSION);
?>