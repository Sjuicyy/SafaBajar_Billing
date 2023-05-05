<?php
require_once('Connection.php');
$Name = ucwords($_POST['Stall_name']);
$Category = $_POST['Category'];
$Seller = ucwords($_POST['Seller_id']);
$Type = ucwords($_POST['Type']);


$sql = "select * from Stall where Name='$Name'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<h2> The Stall name '$Name' has already been created. You cannot create same stall twice.Please try again with a different stall name or go to stall page to edit the stall '$Name' </h2>";
} elseif ((count($Category) > 0)) {
    // these variables sometimes may be empty if any category is not selected for the stall
    $Rent = $_POST['Rent'];
    $Water = $_POST['Water'];
    $Electrical = $_POST['Electrical'];
    $Waste = $_POST['Waste'];
    $Security = $_POST['Security'];


    //Creating an arrray of all rates including both selected( have value) and which are not selected(donot have value/empty) 
    $All_rate = array($Rent, $Water, $Electrical, $Waste, $Security);
    //Actual rates -- Removing empty vlaues of rates which are not selected and genereting new array with only rates of selected categories
    $Rate = array_values(array_filter($All_rate));
    $count = count($Category);
    for ($i = 0; $i < $count; $i++) {
        echo "<br>" . $Category[$i] . '->' . $Rate[$i];
        $sql = "INSERT INTO `Stall` (`Id`, `Name`, `Seller_id`,`Type`, `Category`, `Rate`) VALUES (NULL, '$Name', '$Seller','$Type', '$Category[$i]', '$Rate[$i]')";
        mysqli_query($conn, $sql);
    }
} else {

    $sql = "INSERT INTO `Stall` (`Id`, `Name`, `Seller_id`,`Type`, `Category`, `Rate`) VALUES (NULL, '$Name', '$Seller','$Type',NULL, NULL)";
    mysqli_query($conn, $sql);
}

?>