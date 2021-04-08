
<?php
include '../db.php';
 $b_id= $_GET['id']; $sql = "DELETE FROM category WHERE category_id=$b_id";
$result = $conn->query($sql);

if($result){
    echo "deleted";
}

mysqli_close($conn);
header("Refresh:1; url=../category.php");
?>

