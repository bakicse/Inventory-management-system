<?php
include '../db.php';

$pr_name = $_GET['pr_name'];
$pr_cat = $_GET['pr_cat'];
$pr_stk = $_GET['pr_stock'];
$pr_brand = $_GET['pr_brand'];
$sql = "INSERT INTO product (product_name, product_category_id ,in_stock, pr_brand) VALUES ('$pr_name', '$pr_cat'  ,'$pr_stk' , '$pr_brand')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Refresh:1; url=../product.php");


?>
