<?php

include 'templates/header.php';
include 'db.php';
?>
<a href="home.php">HOME</a>
<br>
<br>


<h4>SELL PRODUCTS</h4>
 <form  action="creating/create_selling.php" >
   <label for="sell_product_id">Choose a product:</label>
   <select name="sell_product_id" id="sell_product_id">
     <?php

     $sql = "SELECT * FROM product";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
         $id=$row["product_id"];
         $name=$row["product_name"];
         echo '<option value="' . $id . '">'. $name . '</option>';
     }
 }
      ?>
   </select>
   <br>
   <br>
   <label for="sell_qty">product stock qty:</label>
   <input type="number"  name="sell_qty"><br><br>
   <label for="selling_price">selling_price:</label>
   <input type="number"  name="selling_price"><br><br>
   <input type="submit" value="INSERT">
   
 </form>


 <br>
 <br>


<aside class="">

<table style="width:50%;border:1px solid black">
  <tr >
      <th style="text-align:left;">Products</th>
      <th>Avilable</th>
    </tr>

<?php



$sql = "SELECT * FROM product";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$row["product_id"];
    //$pr_inventory[$id]=$row["in_stock"];
    echo "<tr>";
    //echo "<td>" . $id . "</td>";
    echo "<td>" . $row["product_name"] . "</td>";
    echo "<td>" . $row["in_stock"] . "</td>";
    echo "</tr>";
  }

  echo '</table></aside>';
} else {
  echo "0 results";
}



 ?>




 
