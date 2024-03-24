<!-- Edit Product Modal -->
<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editProductForm">
          <input type="hidden" id="editId" name="id">
          <div class="form-group">
            <label for="editName">Name:</label>
            <input type="text" class="form-control" id="editName" name="name">
          </div>
          <div class="form-group">
            <label for="editDescription">Description:</label>
            <textarea class="form-control" id="editDescription" name="description"></textarea>
          </div>
          <div class="form-group">
            <label for="editPrice">Price:</label>
            <input type="text" class="form-control" id="editPrice" name="price">
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
