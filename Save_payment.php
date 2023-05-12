<?php
require_once('Connection.php');





session_start();
if (!($User_Email = $_SESSION['Email'])) {
    header('Location:Login.php');
}

$sql_user = "SELECT `Admin`.`Name`,`Admin`.`Id` FROM `Admin` WHERE `Admin`.`Email`= '$User_Email' ";
$result_user = mysqli_query($conn, $sql_user);
$data_user = mysqli_fetch_array($result_user);

$User_id=$data_user['Id'];




$Seller_id = $_POST['Seller_id'];
$Amount = $_POST['Amount'];
$Remarks = $_POST['Remarks'];
$sql = "INSERT INTO Billing(Seller_id,Amount,Remarks,Admin_id) VALUES ('$Seller_id','$Amount','$Remarks','$User_id')";
mysqli_query($conn, $sql);
header('Location:Bill_entry.php');
?>