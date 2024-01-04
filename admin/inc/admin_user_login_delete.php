<?php
include("../config.php");
 
//getting id of the data from url
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM artsignuptable WHERE id=$id");
 
header("Location:../all_user_profile.php");
?>