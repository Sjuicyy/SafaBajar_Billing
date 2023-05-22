<?php
require_once('Connection.php');
echo $Name = ucwords($_POST['Name']);
echo $Contact = $_POST['Contact'];
echo $Address = ucwords($_POST['Address']);



$FilePhoto = $_FILES['Photo'];
$FilePhoto["name"] = mt_rand(1, 100000000000000000) . ".jpg";  //Rename name of received file
$Photo = $FilePhoto["name"];  // Assigned new file name to variable



$SellerFolder = "SellerPhotos/" . basename($Photo);
if (move_uploaded_file($_FILES['Photo']['tmp_name'], $SellerFolder)) {
    echo "<script>alert('New Agent Added !');</script>";
} else {
    echo "<script>alert('Something went wrong! Please Retry');</script>";
}





$FileCitizen = $_FILES['Citizenship'];
// $FileCitizen["name"] = mt_rand(1, 100000000000000000) . ".jpg";    //Rename name of received file
$FileCitizen["name"] = $Photo;    //For same file name of citizenship and photo

$Citizenship = $FileCitizen["name"];  // Assigned new file name to variable



$CitizenFolder = "Citizenship/" . basename($Citizenship);   //Full folder address with folder name and name of file
if (move_uploaded_file($_FILES['Citizenship']['tmp_name'], $CitizenFolder)) {
    echo "<script>alert('New Agent Added !');</script>";
} else {
    echo "<script>alert('Something went wrong! Please Retry');</script>";
}


$sql = "INSERT INTO `Seller` (`Id`, `Name`, `Contact`, `Address`, `Citizenship`, `Photo`) VALUES (NULL, '$Name', '$Contact', '$Address', '$Citizenship', '$Photo')";
mysqli_query($conn, $sql);
header('Location:Seller.php');





// ?>