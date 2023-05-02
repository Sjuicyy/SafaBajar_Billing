<?php
require_once('Connection.php');
$Id = $_GET['id'];
echo $Name = ucwords($_POST['Name']);
echo $Contact = $_POST['Contact'];
echo $Address = ucwords($_POST['Address']);

$FilePhoto = $_FILES['Photo'];
$FileCitizen = $_FILES['Citizenship'];

if (is_uploaded_file($FilePhoto['tmp_name'])) {

    $sql = "SELECT Photo from Seller WHERE Id=$Id";
    $result = $conn->query($sql);
    $data = mysqli_fetch_array($result);
    $SellerPic = $data['Photo'];
    unlink("./SellerPhotos/$SellerPic"); //// deleted perviously saved citizenship photo from folder


    $FilePhoto["name"] = mt_rand(1, 100000000000000000) . ".jpg"; //Rename name of received file
    $Photo = $FilePhoto["name"]; // Assigned new file name to variable

    $SellerFolder = "./SellerPhotos/" . basename($Photo);

    if (move_uploaded_file($_FILES['Photo']['tmp_name'], $SellerFolder)) {
        echo "<script>alert('New Agent Profile Pic !');</script>";
    } else {
        echo "<script>alert('Something went wrong! Please Retry');</script>";
    }

    // $Sql= "UPDATE `Seller` SET `Name` = $Name, `Contact` = '$Contact, `Address` = $Address, `Citizenship` = $Citizenship, `Photo` = $Photo WHERE `Seller`.`Id` = $Id";
    $sql = "UPDATE `Seller` SET  `Photo` = '$Photo' WHERE `Seller`.`Id` = $Id";
    mysqli_query($conn, $sql);

} else {
    // File was not uploaded
    echo "File upload failed.";
}



if (is_uploaded_file($FileCitizen['tmp_name'])) {

    $sql = "SELECT Citizenship from Seller WHERE Id=$Id";
    $result = $conn->query($sql);
    $data = mysqli_fetch_array($result);
    $CitizenPic = $data['Citizenship'];
    unlink("./Citizenship/$CitizenPic"); //// deleted perviously saved citizenship photo from folder


    $FileCitizen["name"] = mt_rand(1, 100000000000000000) . ".jpg"; //Rename name of received file
    $Citizenship = $FileCitizen["name"]; // Assigned new file name to variable


    $CitizenFolder = "./Citizenship/" . basename($Citizenship); //Full folder address with folder name and name of file
    if (move_uploaded_file($_FILES['Citizenship']['tmp_name'], $CitizenFolder)) {
        echo "<script>alert('New Agent Citizenship !');</script>";
    } else {
        echo "<script>alert('Something went wrong! Please Retry');</script>";
    }
    $sql = "UPDATE `Seller` SET  `Citizenship` = '$Citizenship' WHERE `Seller`.`Id` = $Id";
    mysqli_query($conn, $sql);


} else {
    // File was not uploaded
    echo "File upload failed.";
}


$sql="UPDATE `Seller` SET  `Name` = '$Name', `Contact` = '$Contact', `Address` = '$Address' WHERE `Seller`.`Id` = $Id";
mysqli_query($conn, $sql);

header('location:Seller.php');



?>