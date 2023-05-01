<?php
require_once "Connection.php";
$Id = $_GET['id'];

// TO DELETE SELLER PHOTO FROM FOLDER
$Photo_sql = "SELECT Photo FROM Seller WHERE id='$Id'";
$Photo_result = mysqli_query($conn, $Photo_sql);
$data = mysqli_fetch_assoc($Photo_result);
$SellerPic = $data['Photo'];
unlink("./SellerPhotos/$SellerPic");



// TO DELETE CITIZENSHIP PHOTO FORM FOLDER
$Citizen_sql = "SELECT Citizenship FROM Seller WHERE id='$Id' ";
$Citizen_result = mysqli_query($conn, $Citizen_sql);
$data = mysqli_fetch_assoc($Citizen_result);
$CitizenPic = $data['Citizenship'];
unlink("./Citizenship/$CitizenPic");


// TO DELERE DATA FORM DATABASE
$sql = "DELETE from Seller where `Seller`.`Id` = $Id";
mysqli_query($conn, $sql);
header('location:Seller.php');
?>