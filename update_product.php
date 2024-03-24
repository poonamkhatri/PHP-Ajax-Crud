<?php
include('db_config.php');

$productId = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$sql = "UPDATE products SET name='$name', description='$description', price='$price' WHERE id=$productId";

if ($conn->query($sql) === TRUE) {
  echo 'Product updated successfully.';
} else {
  echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();
?>
