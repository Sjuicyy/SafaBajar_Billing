<?php


require_once('Connection.php');



$Stall_name = $_POST['Stall_name'];
$New_owner_id =  $_POST['New_owner'];


$Advance_amount = $_POST['advance'];

if ($Advance_amount > 0) {

    session_start();
    if (!($User_Email = $_SESSION['Email'])) {
        header('Location:Login.php');
    }

    $sql_user = "SELECT `Admin`.`Name`,`Admin`.`Id` FROM `Admin` WHERE `Admin`.`Email`= '$User_Email' ";
    $result_user = mysqli_query($conn, $sql_user);
    $data_user = mysqli_fetch_array($result_user);

    $User_id = $data_user['Id'];



    $Seller_id = $_POST['Seller_id'];
    $Amount = $Advance_amount;
    $Remarks = 'Advance';
    $sql = "INSERT INTO Billing(Seller_id,Amount,Remarks,Admin_id) VALUES ('$New_owner_id','$Amount','$Remarks','$User_id')";
    mysqli_query($conn, $sql);
}

$sql = "UPDATE `Stall` SET `Seller_id` = '$New_owner_id' WHERE `Stall`.`Name` = '$Stall_name'";
mysqli_query($conn, $sql);
header('location:Stall.php');
