

<?php


include '../templates/header.php';
include '../db.php';
 $b_id= $_GET['id'];
$sql = "SELECT * FROM category WHERE category_id=$b_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {


?>


<h2>SEARCH FOR BRANDS</h2>
<form  action="update_categories.php" >
  <input type="text" name="b_name" value="<?php echo  $row["category_name"]   ?>">
  <input type="hidden" name="b_id" value="<?= $b_id ?>">
  <input type="submit" value="save">
</form>


<?php

}// while ends


} //if ends

 include '../templates/footer.php';
$conn->close();

 ?>
