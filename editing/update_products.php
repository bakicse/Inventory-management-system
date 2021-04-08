<?php
include '../db.php';

if (isset($_GET['pr_id'])) {
 $pr_id = $_GET['pr_id'];
}

if (isset($_GET['pr_name'])) {
 $pr_name = $_GET['pr_name'];
}
if (isset($_GET['pr_cat'])) {
 $pr_cat = $_GET['pr_cat'];
}
if (isset($_GET['pr_stock'])) {
 $pr_stock = $_GET['pr_stock'];
}

$sql = "UPDATE product SET product_name='$pr_name' ,  product_category_id='$pr_cat' , in_stock= '$pr_stock'  WHERE product_id=$pr_id";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

header("Refresh:1.5; url=../product.php");
?>
