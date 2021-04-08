
<?php
include 'templates/header.php';
include 'db.php';

?>
<!-- <h2>Search</h2> -->
<form  action="searching/search_products.php" >
  <input type="text" name="search" value="">
  <input type="submit" value="search">
</form>
<br>
<a href="home.php">HOME</a>
<h4>Create New Products</h4>
<form  action="creating/create_product.php" >
  <label for="pr_name" >Name of Product:</label>
  <input type="text"  name="pr_name"><br><br>
  
  <label for="pr_cat">Choose a Category:</label>
  <select name="pr_cat" id="pr_cat">
    <?php
    $sql = "SELECT * FROM category";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $id=$row["category_id"];
        echo   $row["category_name"] . '<br>';
        $name=$row["category_name"];
        echo '<option value="' . $id . '">'. $name . '</option>';
    }
}
     ?>

  </select>

  <br><br>
  <label for="pr_brand">Choose a Brand:</label>
  <select name="pr_brand" id="pr_brand">
    <?php
    $sql = "SELECT * FROM brands";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $id=$row["brand_id"];
        echo   $row["brand_name"] . '<br>';
        $name=$row["brand_name"];
        echo '<option value="' . $id . '">'. $name . '</option>';
    }
}
     ?>

  </select>
  <br>
  <input type="hidden"  name="pr_stock" value=0><br><br>
  <input type="submit" value="INSERT">
</form>



<br>
<br>

<table style="width:50%">
  <tr >
     <!-- <th>id</th> -->
      <th style="text-align:left">Products Name</th>
     <!-- <th>product_category_id</th>-->
      <th></th>
      <th style="text-align:left">stock avilable</th>
      <th style="text-align:left">Change</th>
      <th style="text-align:left">Remove</th>
    </tr>

<?php

include 'db.php';
$sql = "SELECT * FROM product";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$row["product_id"];
    echo "<tr>";
   // echo "<td>" . $id . "</td>";
    echo "<td>" . $row["product_name"] . "</td>";
   // echo "<td>" . $row["product_category_id"] . "</td>";
   echo "<td>";
    echo "<td>" . $row["in_stock"] . "</td>";
    echo "<td> <a href='editing/edit_products.php?id=". $id  ."'> edit </a></td>";
    echo "<td> <a href='#'> delete </a></td>";
    echo "</tr>";
  }

  echo '</table>';
} else {
  echo "0 results";
}

?>



<?php




$conn->close();
 include 'templates/footer.php';
?>
