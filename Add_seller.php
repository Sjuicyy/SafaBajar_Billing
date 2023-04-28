<?php
require_once('Connection.php');
$Name = $_POST['Name'];
$Contact = $_POST['Contact'];
$Address = $_POST['Address'];


$FileCitizen = $_FILES['Citizenship'];
$FileCitizen["name"]=mt_rand(1,100000000000000000).".jpg";
$Citizenship=$FileCitizen["name"];


$FilePhoto = $_FILES['Photo'];
$FilePhoto["name"]=mt_rand(1,100000000000000000).".jpg";
$Photo=$FilePhoto["name"];





$sql="INSERT INTO `Seller` (`Id`, `Name`, `Contact`, `Address`, `Citizenship`, `Photo`) VALUES (NULL, '$Name', '$Contact', '$Address', '$Citizenship', '$Photo')";
mysqli_query($conn,$sql);
header('Location:Seller.php');
?>