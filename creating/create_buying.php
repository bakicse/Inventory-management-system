<?php
include '../db.php';

$buy_product_id = $_GET['buy_product_id'];
$buy_qty = $_GET['buy_qty']; //buying_price
$buying_price = $_GET['buying_price']; 
$sql = "INSERT INTO buying (buy_product_id, buy_qty,buying_price ) VALUES ('$buy_product_id', '$buy_qty', '$buying_price'  )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$pr_inventory=[];
$sql = "SELECT * FROM product WHERE product_id=$buy_product_id ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $id=$row["product_id"];
    $pr_inventory[$id]=$row["in_stock"];
  }
} else {
  echo "0 results";
}

$n= $buy_qty + $pr_inventory[$buy_product_id];


$sql = "UPDATE product SET  in_stock= '$n'  WHERE product_id=$buy_product_id";
if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}




$conn->close();

header("Refresh:0; url=../buying.php");


?>
