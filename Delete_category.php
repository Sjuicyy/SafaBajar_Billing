<?php 
require_once('Connection.php');

$id = $_GET["id"];
$sql="DELETE FROM Category WHERE `Category`.`Id` = $id";
mysqli_query($conn,$sql);
header('Location:Category.php');
?>
