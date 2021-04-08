

<?php



include '../templates/header.php';
include '../db.php';

$KW = $_GET['search'];
$sql = "SELECT * FROM category WHERE category_name LIKE '%{$KW}%'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " Name: " . $row["category_name"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();










 include '../templates/footer.php';


 ?>
<a href="../category.php">GO BACK TO BRANDS</a>
