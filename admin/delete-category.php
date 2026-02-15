<?php
include "config.php";

$userid = $_GET['id'];
$sql = "DELETE FROM category WHERE category_id = {$userid}";

if(mysqli_query($conn, $sql)){
header("Location: {$hostname}/admin/category.php");
}else{
    echo "<p style='color:red; margin:10px, 0;'>Can\'t delete category.</p>";
}
mysqli_close($conn);
?>
