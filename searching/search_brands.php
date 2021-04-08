

<?php



include '../templates/header.php';
include '../db.php';

$KW = $_GET['search'];
$sql = "SELECT * FROM brands WHERE brand_name LIKE '%{$KW}%'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " Name: " . $row["brand_name"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();










 include '../templates/footer.php';


 ?>
<a href="../brand.php">GO BACK TO BRANDS</a>
