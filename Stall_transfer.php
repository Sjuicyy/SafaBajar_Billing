<?php
require_once('Connection.php');
 $Stall_name = $_POST['Stall_name'];
 $New_owner_id =  $_POST['New_owner'];

$sql = "UPDATE `Stall` SET `Seller_id` = '$New_owner_id' WHERE `Stall`.`Name` = '$Stall_name'";
mysqli_query($conn, $sql);
header('location:Stall.php');
?>