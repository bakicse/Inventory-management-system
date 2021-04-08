<?php
include 'templates/header.php';
include 'db.php';
?>
<a href="home.php">HOME</a>
<br>
<br>
<form  action="searching/search_brands.php" >
  <input type="text" name="search" value=""placeholder="search Brand here">
  <input type="submit" value="search">
</form>


<form  action="creating/create_brand.php" >
<br>
<br>
<label for="pr_cat">Choose a category:</label>
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
  <input type="text" name="insert" value="" placeholder="Insert New Brand">
  <input type="submit" value="Insert">
</form>









<h2>All Brands are here</h2>
<table style="width:50%">
  <tr>
     <!-- <th>id</th> -->
      <th style="text-align:left">Category</th>
    
      <th style="text-align:left">Change</th>
      <th style="text-align:left">Remove</th>
     
    </tr>

<?php
$sql = "SELECT * FROM brands";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    $id=$row["brand_id"];
    echo "<tr>";
    //echo "<td>" . $id . "</td>";
    
    echo "<td>" . $row["brand_name"] . "</td>";
    
    echo "<td> <a href='editing/edit_brands.php?id=". $id  ."'> edit </a></td>";
    
    echo "<td> <a href='#'> delete </a></td>";
    echo "</tr>";
  }
} else {
  echo "0 results";
}











 include 'templates/footer.php';
$conn->close();

 ?>
