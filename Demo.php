<?php
require_once("Connection.php");
$sql = "SELECT DISTINCT Stall.Name FROM `Stall` ";
$result = mysqli_query($conn, $sql);
while ($data=mysqli_fetch_array($result)) {
    echo $data['Name'];
}
?>