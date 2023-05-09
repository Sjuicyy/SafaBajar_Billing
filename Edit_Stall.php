<?php
require_once("Connection.php");

// print_r($_POST);


echo $Stall = $_GET['id'];
echo $S_id = $_GET['S_id'];
echo $Type = $_GET['type'];




foreach ($_POST as $x => $val) {
    $sql = "SELECT * FROM Stall where Name = '$Stall'   and Category = '$x' ";
    $result = mysqli_query($conn, $sql);

    $data = mysqli_fetch_assoc($result);
    if ($data == !null) {
        $sql1 = "UPDATE Stall SET Rate=$val WHERE Name = '$Stall' and Category = '$x'";
        mysqli_query($conn, $sql1);
    } else {

        if ($val > 0) {
            $sql2 = "INSERT INTO `Stall` (`Id`, `Name`, `Seller_id`,`Type`, `Category`, `Rate`) VALUES (NULL, '$Stall', '$S_id','$Type', '$x', '$val')";
            mysqli_query($conn, $sql2);
        }
    }
}
header("Location:Stall.php");
?>