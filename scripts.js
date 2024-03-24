$(document).ready(function() {
  // Fetch products and display in table
  function fetchProducts() {
    $.ajax({
      url: 'fetch_products.php',
      method: 'GET',
      success: function(data) {
        $('#productTable').html(data);
      }
    });
  }

  fetchProducts(); // Initial fetch

  // Add Product Form Submission
  $('#addProductForm').submit(function(e) {
    e.preventDefault();
    $.ajax({
      url: 'add_product.php',
      method: 'POST',
      data: $(this).serialize(),
      success: function(response) {
        $('#addProductModal').modal('hide');
        $('#addProductForm')[0].reset();
        $('#successMessage').html(response).fadeIn().delay(3000).fadeOut();
        fetchProducts(); // Refresh product list
      }
    });
  });

  // Delete Product
  $(document).on('click', '.delete-btn', function() {
    var productId = $(this).data('id');
    if (confirm('Are you sure you want to delete this product?')) {
      $.ajax({
        url: 'delete_product.php',
        method: 'POST',
        data: { id: productId },
        success: function(response) {
          $('#successMessage').html(response).fadeIn().delay(3000).fadeOut();
          fetchProducts(); // Refresh product list
        }
      });
    }
  });

  // Edit Product
  $(document).on('click', '.edit-btn', function() {
    var productId = $(this).data('id');
    $.ajax({
      url: 'get_product.php',
      method: 'POST',
      data: { id: productId },
      dataType: 'json',
      success: function(data) {
        $('#editProductModal').modal('show');
        $('#editId').val(data.id);
        $('#editName').val(data.name);
        $('#editDescription').val(data.description);
        $('#editPrice').val(data.price);
      }
    });
  });

  // Update Product Form Submission
  $('#editProductForm').submit(function(e) {
    e.preventDefault();
    $.ajax({
      url: 'update_product.php',
      method: 'POST',
      data: $(this).serialize(),
      success: function(response) {
        $('#editProductModal').modal('hide');
        $('#successMessage').html(response).fadeIn().delay(3000).fadeOut();
        fetchProducts(); // Refresh product list
      }
    });
  });
});
