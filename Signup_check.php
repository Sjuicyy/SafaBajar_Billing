<?php
require_once('Connection.php');
 $Name = ucwords($_POST['name']);
 $Email = $_POST['email'];



$sql_email="SELECT * From Admin WHERE Email = '$Email' ";
$query=mysqli_query($conn,$sql_email);
$result=mysqli_fetch_array($query);
if ($result){
    echo "Email Already Exists. Please try again with another Email !!!";
}
else{
 $Phone = $_POST['phone'];
 $Password = $_POST['password'];
 $Address = ucwords($_POST['address']);
//  $Photo=$_FILES['photo']['name'];

$FilePhoto = $_FILES['photo'];
$FilePhoto["name"] = mt_rand(1, 100000000000000000) . ".jpg"; //Rename name of received file
 $Photo = $FilePhoto["name"]; // Assigned new file name to variable

 $AdminFolder = "./AgentPics/" . basename($Photo);
if (move_uploaded_file($_FILES['photo']['tmp_name'], $AdminFolder)) {
    echo "<script>alert('New Agent Added !');</script>";
} else {
    echo "<script>alert('Something went wrong! Please Retry');</script>";
}




$sql = "INSERT INTO `Admin` (`Id`, `Name`, `Email`, `Password`, `Phone`, `Address`, `Photo`) VALUES (NULL, '$Name', '$Email', '$Password', '$Phone', '$Address', '$Photo')";
mysqli_query($conn, $sql);
header('Location:Login.php');




}

?>