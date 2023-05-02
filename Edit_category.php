<?php
require_once('Connection.php');
 $Id = $_GET['id'];
 $Title = ucwords($_POST['CatagoryName']);
 $Rate = $_POST['DefaultPrice'];

$sql = "UPDATE `Category` SET `Title` = '$Title' , `Rate`='$Rate' WHERE `Id` = '$Id' ";
mysqli_query($conn,$sql);
header('location: Category.php' );


?>