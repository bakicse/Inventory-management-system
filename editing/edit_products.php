<?php
include '../templates/header.php';
include '../db.php';


if (isset($_GET['id'])) {
 echo $pr_id = $_GET['id'];
}


/*
if (isset($_GET['pr_name'])) {
 echo $pr_name = $_GET['pr_name'];
}

if (isset($_GET['pr_cat'])) {
 echo $pr_cat = $_GET['pr_cat'];
}

if (isset($_GET['pr_stock'])) {
 echo $pr_stock = $_GET['pr_stock'];
}
*/


$sql = "SELECT * FROM product WHERE product_id=$pr_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>
<h2>SEARCH FOR BRANDS</h2>
<form  action="update_products.php" >

  <label for="pr_name">product name:</label>
  <input type="text"  name="pr_name"  value="<?php echo  $row['product_name'];   ?>" ><br><br>
  <label for="pr_cat">Choose a category:</label>
  <input type="text"  name="pr_cat"  value="<?php echo  $row['product_category_id'];  ?>" ><br><br>
  <label for="pr_stock">availale for sale:</label>
  <input type="number"  name="pr_stock"  value="<?php echo $row['in_stock'];  ?>" ><br><br>

  <input type="hidden" name="pr_id" value="<?= $pr_id ?>">




  <input type="submit" value="save">
</form>
<?php
}// while ends
} //if ends
 include '../templates/footer.php';
$conn->close();

 ?>
