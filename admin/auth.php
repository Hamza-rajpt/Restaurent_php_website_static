<?php
session_start();
if($_SESSION["auth"] == FALSE){
header("Location:user_login.php");
exit(); }
?>