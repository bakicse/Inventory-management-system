<a href="home.php">HOME</a>
<br>
<br>

<?php
include 'db.php';
//SELECT * FROM selling INNER JOIN buying ON selling.sell_product_id = buying.buy_product_id;

$sql = "SELECT * FROM selling INNER JOIN buying ON selling.sell_product_id = buying.buy_product_id;";
$result = $conn->query($sql);

$profit=0;

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $per_prod_cost = $row["buying_price"] / $row["buy_qty"]; 
    echo "id: " . $row["sell_product_id"]. " - Name: " . $row["buying_price"]. " " . $row["selling_price"]. "<br>";
    echo "Profit = ".$p = $row["selling_price"] - $per_prod_cost ."<br>";
    $profit = (float)$profit  + (float)$p;
  }
} else {
  echo "0 results";
}

echo "<br>Total profit = $profit";
$conn->close();

?>

