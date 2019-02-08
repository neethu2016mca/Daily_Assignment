<?php
include 'dbconnect.php';
$del=$_GET["id"];
echo $del;
mysqli_query($con,"delete from iaddcustomer where id='$del'");
header("Location:viewcustomer.php");
?>
