<?php 
require_once('Connection.php');
$Seller_id=$_POST['Seller_id'];
$Amount=$_POST['Amount'];
$Remarks=$_POST['Remarks'];
$sql="INSERT INTO Billing(Seller_id,Amount,Remarks) VALUES ('$Seller_id','$Amount','$Remarks')";
mysqli_query($conn,$sql);
header('Location:Bill_entry.php');
?>
