<?php
include '../db.php';

$sell_product_id = $_GET['sell_product_id'];
$sell_qty = $_GET['sell_qty']; //buying_price
$selling_price = $_GET['selling_price']; 
$sql = "INSERT INTO selling (sell_product_id, sell_qty,selling_price ) VALUES ('$sell_product_id', '$sell_qty', '$selling_price'  )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$pr_inventory=[];
$sql = "SELECT * FROM product WHERE product_id=$sell_product_id ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $id=$row["product_id"];
    $pr_inventory[$id]=$row["in_stock"];
  }
} else {
  echo "0 results";
}

$n= $pr_inventory[$sell_product_id] - $sell_qty ;


$sql = "UPDATE product SET  in_stock= '$n'  WHERE product_id=$sell_product_id";
if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}




$conn->close();

header("Refresh:0; url=../selling.php");


?>
