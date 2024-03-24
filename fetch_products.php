<?php
include('db_config.php');

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>';
  while ($row = $result->fetch_assoc()) {
    echo '<tr>
            <td>' . $row['id'] . '</td>
            <td>' . $row['name'] . '</td>
            <td>' . $row['description'] . '</td>
            <td>' . $row['price'] . '</td>
            <td>
              <button type="button" class="btn btn-danger delete-btn" data-id="' . $row['id'] . '">Delete</button>
              <button type="button" class="btn btn-primary edit-btn" data-id="' . $row['id'] . '">Edit</button>
            </td>
          </tr>';
  }
  echo '</tbody></table>';
} else {
  echo '<p>No products found.</p>';
}

$conn->close();
?>
