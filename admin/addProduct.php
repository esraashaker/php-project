<h3 class="display-3">Add New Product</h3>
<form action="crud/insert.php" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="product_brand">Product Brand</label>
            <select id="product_brand" class="form-control" name="product_brand">
                <option value="Samsung">Samsung</option>
                <option value="Apple">Apple</option>
                <option value="DELL">DELL</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="expiry_date">Expiry Date</label>
            <input type="date" class="form-control" id="expiry_date" name="expiry_date">
        </div>
        <div class="form-group col-md-6">
            <label for="product_image">product Image</label>
            <input type="file" class="form-control" id="product_image" name="product_image">
        </div>
    </div>
    <div class="d-grid gap-2 col-md-6 mt-3">
        <button class="btn btn-primary" type="submit">Add Product</button>
    </div>
</form>
