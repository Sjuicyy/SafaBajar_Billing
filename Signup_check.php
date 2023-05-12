<?php
require_once('Connection.php');
echo $Name = ucwords($_POST['name']);
echo $Email = $_POST['email'];
echo $Phone = $_POST['phone'];
echo $Password = $_POST['password'];
echo $Address = ucwords($_POST['address']);
// echo $Photo=$_FILES['photo']['name'];

$FilePhoto = $_FILES['photo'];
$FilePhoto["name"] = mt_rand(1, 100000000000000000) . ".jpg"; //Rename name of received file
echo $Photo = $FilePhoto["name"]; // Assigned new file name to variable

echo $AdminFolder = "./AgentPics/" . basename($Photo);
if (move_uploaded_file($_FILES['photo']['tmp_name'], $AdminFolder)) {
    echo "<script>alert('New Agent Added !');</script>";
} else {
    echo "<script>alert('Something went wrong! Please Retry');</script>";
}




$sql = "INSERT INTO `Admin` (`Id`, `Name`, `Email`, `Password`, `Phone`, `Address`, `Photo`) VALUES (NULL, '$Name', '$Email', '$Password', '$Phone', '$Address', '$Photo')";
mysqli_query($conn, $sql);
header('Location:Login.php');






?>