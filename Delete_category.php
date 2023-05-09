<?php 
require_once('Connection.php');

$id = $_GET["id"];


$sql="SELECT `Category`.`Title` FROM `Category` WHERE `Category`.`Id` = $id";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);
echo $Title=$data['Title'];


$sql="DELETE FROM Stall WHERE `Stall`.`Category` = '$Title' ";
mysqli_query($conn,$sql);


$sql="DELETE FROM Category WHERE `Category`.`Id` = $id";
mysqli_query($conn,$sql);

header('Location:Category.php');

?>
