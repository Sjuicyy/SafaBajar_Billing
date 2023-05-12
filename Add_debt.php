<?php
require_once("Connection.php");




session_start();
if (!($User_Email = $_SESSION['Email'])) {
    header('Location:Login.php');
}

$sql_user = "SELECT `Admin`.`Name`,`Admin`.`Id` FROM `Admin` WHERE `Admin`.`Email`= '$User_Email' ";
$result_user = mysqli_query($conn, $sql_user);
$data_user = mysqli_fetch_array($result_user);

$User_id=$data_user['Id'];







$sql_stall = "SELECT DISTINCT Stall.Name,Stall.Seller_Id FROM `Stall` ";
$result_stall = mysqli_query($conn, $sql_stall);
while ($data_stall = mysqli_fetch_array($result_stall)) {
    $Stall_Name = $data_stall['Name'];
    $sql_cat = "SELECT * FROM Category";
    $result_cat = mysqli_query($conn, $sql_cat);
    $Date = Date('d/M/Y');
    $sum = 0;
    while ($data_cat = mysqli_fetch_assoc($result_cat)) {
        $Category = $data_cat['Title'];
        $sql1 = "SELECT * FROM `Stall` WHERE `Name`='$Stall_Name' AND `Category`='$Category'";
        $result1 = mysqli_query($conn, $sql1);
        $data1 = mysqli_fetch_assoc($result1);
        if ($data1['Rate'] == !null) {
             $data1['Rate'];
            $sum = $sum + $data1['Rate'];
        }
    }
    $Remarks='Rent-'.$data_stall['Name'];
    $Seller_id = $data_stall['Seller_Id'];
    $sql2 = "INSERT INTO `Billing` (`Id`, `Seller_id`, `Amount`, `Debit`, `Remarks`, `Date`,`Admin_id`) VALUES (NULL, '$Seller_id', NULL , '$sum', '$Remarks' , CURRENT_TIMESTAMP,'$User_id');";
    $result2 = mysqli_query($conn, $sql2);
}
header('location:index.php' )
?>