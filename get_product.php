<?php
include('db_config.php');

$productId = $_POST['id'];

$sql = "SELECT * FROM products WHERE id = $productId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  echo json_encode($row);
} else {
  echo json_encode(null);
}

$conn->close();
?>
