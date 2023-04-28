<?php 
require_once('Connection.php');
$Category=ucwords($_POST['CatagoryName']);
$Rate= $_POST['DefaultPrice'];;
$sql="INSERT INTO Category(Title,Rate) VALUES ('$Category','$Rate')";
mysqli_query($conn,$sql);
header('Location:Category.php');
?>
