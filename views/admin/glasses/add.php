<h3>Add new glasses</h3>
<form method="post">
    <div class="form-group">
        <label for="brandname">Category name</label>
        <input type="text" class="form-control" id="brandname" name="name">
    </div>
    <div class="form-group">
        <label for="brandname">Select Image File to Upload:</label>
        <input type="file" class="form-control" id="brandname" name="image">
    </div>
    <div class="form-group">
        <label for="Description">Description</label>
        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <textarea class="form-control" id="price" rows="3" name="price"></textarea>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="brand">Brand</label>
            <select class="form-control" id="brand" name="brand">
                <?php foreach ($brand as $item) : ?>
                    <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="cate">Category</label>
            <select class="form-control" id="cate" name="cate">
                <?php foreach ($cate as $item) : ?>
                    <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="detail">Detail</label>
        <textarea class="form-control" id="detail" rows="3" name="detail"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</form>