<?php
require_once("Connection.php");
 $Email = $_POST['email'];
 $Password = $_POST['password'];
$sql = "SELECT  * FROM `Admin` WHERE `Email`='$Email' && `Password`='$Password' ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);
if($data>0){
session_start();
$_SESSION['Email'] = $Email;
header('Location: Index.php');
}
else{
    echo"Please Enter Correct Email and Password";
}
?>