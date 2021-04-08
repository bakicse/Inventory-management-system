<?php
include '../db.php';

$value = $_GET['insert'];

$sql = "INSERT INTO brands (brand_name) VALUES ('$value')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Refresh:2; url=../brand.php");


?>
