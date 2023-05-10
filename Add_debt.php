<?php
require_once("Connection.php");
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
    $sql2 = "INSERT INTO `Billing` (`Id`, `Seller_id`, `Amount`, `Debit`, `Remarks`, `Date`) VALUES (NULL, '$Seller_id', NULL , '$sum', '$Remarks' , CURRENT_TIMESTAMP)";
    $result2 = mysqli_query($conn, $sql2);
}
?>