<?php
include('db_config.php');

$productId = $_POST['id'];

$sql = "DELETE FROM products WHERE id = $productId";

if ($conn->query($sql) === TRUE) {
  echo 'Product deleted successfully.';
} else {
  echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();
?>
