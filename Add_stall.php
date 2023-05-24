<?php
require_once('Connection.php');


$Name = ucwords($_POST['Stall_name']);
$Seller = ($_POST['Seller_id']);
$Type = ucwords($_POST['Type']);


$cat_sql = "SELECT * FROM Category";
$query = mysqli_query($conn, $cat_sql);
$all_cat = []; // creating dummy array to store categories 
while ($cat_result = mysqli_fetch_assoc($query)) {
    $cat = $cat_result['Title'];
    array_push($all_cat, $cat); //getting each category title form database and pushing them into $all_cat array
}

$all_post = ($_POST); //keeping the arrray all post data in a variable
unset($all_post['Stall_name'], $all_post['Seller_id'], $all_post['Type']); //removing other data from $_POST except rates
$rate = array_values($all_post); //getting the array of all rate amount 


$sql = "select * from Stall where Name='$Name'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    echo "<h2> The Stall name '$Name' has already been created. You cannot create same stall twice.Please try again with a different stall name or go to stall page to edit the stall '$Name' </h2>";
} else {
    $count = count($all_cat);
    for ($i = 0; $i < $count; $i++) {
        // echo "<br>" . $all_cat[$i] . '->' . $rate[$i];
        $sql = "INSERT INTO `Stall` (`Id`, `Name`, `Seller_id`,`Type`, `Category`, `Rate`) VALUES (NULL, '$Name', '$Seller','$Type', '$all_cat[$i]', '$rate[$i]')";
        mysqli_query($conn, $sql);
    }
    header("Location:Stall.php");
    // echo"success";
}
header("Location:Stall.php");
?>