<?php
include('db_config.php');

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$sql = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', '$price')";

if ($conn->query($sql) === TRUE) {
  echo 'Product added successfully.';
} else {
  echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();
?>
