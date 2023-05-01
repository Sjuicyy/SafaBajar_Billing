<?php
require_once('Connection.php');
$Id = $_GET['id'];
$Name = ucwords($_POST['Name']);
$Contact = $_POST['Contact'];
$Address = ucwords($_POST['Address']);



// $FilePhoto = $_FILES['Photo'];
// $FilePhoto["name"] = mt_rand(1, 100000000000000000) . ".jpg";  //Rename name of received file
// $Photo = $FilePhoto["name"];  // Assigned new file name to variable


/////////////// / / / ///////////////// / ///////////////// / //////////





$FilePhoto = $_FILES['Photo'];
$FileCitizen = $_FILES['Citisenship'];



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
        echo "<script>alert('New Agent Added !');</script>";
    } else {
        echo "<script>alert('Something went wrong! Please Retry');</script>";
    }

    // $Sql= "UPDATE `Seller` SET `Name` = $Name, `Contact` = '$Contact, `Address` = $Address, `Citizenship` = $Citizenship, `Photo` = $Photo WHERE `Seller`.`Id` = $Id";
    $Sql= "UPDATE `Seller` SET  `Citizenship` = $Citizenship WHERE `Seller`.`Id` = $Id";

} else {
    // File was not uploaded
    echo "File upload failed.";
}
if (is_uploaded_file($FilePhoto['tmp_name'])) {

    $sql = "SELECT Photo from Seller WHERE Id=$Id";
    $result = $conn->query($sql);
    $data = mysqli_fetch_array($result);
    $SellerPic = $data['Photo'];
    unlink("./SellerPhotos/$SellerPic"); //// deleted perviously saved citizenship photo from folder


    $FilePhoto["name"] = mt_rand(1, 100000000000000000) . ".jpg";  //Rename name of received file
    $Photo = $FilePhoto["name"];  // Assigned new file name to variable
    
    


    $SellerFolder = "./SellerPhotos/" . basename($Photo);
    if (move_uploaded_file($_FILES['Photo']['tmp_name'], $SellerFolder)) {
        echo "<script>alert('New Agent Added !');</script>";
    } else {
        echo "<script>alert('Something went wrong! Please Retry');</script>";
    }

    // $Sql= "UPDATE `Seller` SET `Name` = $Name, `Contact` = '$Contact, `Address` = $Address, `Citizenship` = $Citizenship, `Photo` = $Photo WHERE `Seller`.`Id` = $Id";
    $Sql= "UPDATE `Seller` SET  `Photo` = $Photo WHERE `Seller`.`Id` = $Id";

} else {
    // File was not uploaded
    echo "File upload failed.";
}




// //////////////////////////////////////////////////////////////////




// $SellerFolder = "./SellerPhotos/" . basename($Photo);  //location with folder name and name of file
// if (move_uploaded_file($_FILES['Photo']['tmp_name'], $SellerFolder)) { //photo moved to destination folder
//     echo "<script>alert('New Agent Added !');</script>";
// } else {
//     echo "<script>alert('Something went wrong! Please Retry');</script>";
// }





// $FileCitizen = $_FILES['Citizenship'];
// $FileCitizen["name"] = mt_rand(1, 100000000000000000) . ".jpg";    //Rename name of received file
// $Citizenship = $FileCitizen["name"];  // Assigned new file name to variable



// $CitizenFolder = "./Citizenship/" . basename($Citizenship);   //location with folder name and name of file
// if (move_uploaded_file($_FILES['Citizenship']['tmp_name'], $CitizenFolder)) { //photo moved to destination folder
//     echo "<script>alert('New Agent Added !');</script>";
// } else {
//     echo "<script>alert('Something went wrong! Please Retry');</script>";
// }


// $sql = "INSERT INTO `Seller` (`Id`, `Name`, `Contact`, `Address`, `Citizenship`, `Photo`) VALUES (NULL, '$Name', '$Contact', '$Address', '$Citizenship', '$Photo')";
// mysqli_query($conn, $sql);
// header('Location:Seller.php');





// ?>