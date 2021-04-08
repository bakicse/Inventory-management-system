
<a href="home.php">HOME</a>
<h4>SEARCH FOR CATEGORIES</h4>
<form  action="searching/search_categories.php" >
  <input type="text" name="search" value="">
  <input type="submit" value="search">
</form>

<h4>CREATE CATEGORIES</h4>
<form  action="creating/create_category.php" >
  <input type="text" name="insert" value="">
  <input type="submit" value="INSERT">
</form>


<?php



include 'templates/header.php';
include 'db.php';


?>

<table style="width:50%">
  <tr>
     <!-- <th>id</th> -->
     <th style="text-align:left">Category Name</th>
      
      <th style="text-align:left">Change</th>
     
      <th style="text-align:left">Remove</th>
    </tr>

<?php
$sql = "SELECT * FROM category";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$row["category_id"];
    echo "<tr>";
    //echo "<td>" . $id . "</td>";
    echo "<td>" . $row["category_name"] . "</td>";
    
    echo "<td> <a href='editing/edit_categories.php?id=". $id  ."'> Edit </a></td>";
   
    echo "<td> <a href='editing/delete_categories.php?id=". $id  ."'> Delete </a></td>";
    echo "</tr>";
  }
} else {
  echo "0 results";
}











 include 'templates/footer.php';
$conn->close();

 ?>
