

<h2>SEARCH FOR BRANDS</h2>
<form  action="searching/search_brands.php" >
  <input type="text" name="search" value="">
  <input type="submit" value="search">
</form>


<?php



include 'templates/header.php';


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ims1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




?>
<a href="home.php">Go To HOME</a>
<table style="width:50%">
  <tr>
      <th>id</th>
      <th>name</th>
      <th>edit</th>
      <th>delete</th>
    </tr>

<?php
$sql = "SELECT * FROM product";
$result = $conn->query($sql);


$PRODUCTS=[];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$row["product_id"];
    echo "<tr>";
    echo "<td>" . $id . "</td>";
    echo "<td>" . $row["product_name"] . "</td>";
    echo "<td> <a href='editing/edit_brands.php?id=". $id  ."'> edit </a></td>";
    echo "<td> <a href='#'> delete </a></td>";
    echo "</tr>";
    $PRODUCTS[] = $row["product_name"];
  }
} else {
  echo "0 results";
}
echo "<br>";
echo "INSERT INTO product(product_name) VALUES ";
foreach ($PRODUCTS as $key => $PRODUCT) {
  echo "('$PRODUCT') ,";
}
//print_r($PRODUCTS);









 include 'templates/footer_new.php';
$conn->close();

 ?>
