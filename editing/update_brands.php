<?php
include '../db.php';

if (isset($_GET)) {
 $b_id = $_GET['b_id'];
}
if (isset($_GET['b_name'])) {

 $b_name = $_GET['b_name'];
}


$sql = "UPDATE brands SET brand_name='$b_name' WHERE brand_id=$b_id";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("Refresh:3; url=../brand.php");
?>
