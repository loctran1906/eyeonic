<h3>Add new glasses</h3>
<?= $alert ?? '' ?>
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="glassesname">Glasses name</label>
        <input type="text" class="form-control" id="glassesname" name="name">
    </div>
    <div class="form-group">
        <label for="imagename">Select Image File to Upload:</label>
        <input type="file" class="form-control" id="imagename" name="image" accept="image/*">
        <div id='img_contain'>
            <img id="image-preview" align='middle' src="../img/header/1.jpg" alt="your image" title='' height="300"/>
        </div>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description123" rows="3" name="description"></textarea>
    </div>
    <div class="form-group">
        <label for="priceglasses">Price</label>
        <input type="number" class="form-control" id="priceglasses" name="price">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="brandforglasses">Brand</label>
            <select class="form-control" id="brandforglasses" name="brand">
                <?php foreach ($brand as $item) : ?>
                    <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="cateforglasses">Category</label>
            <select class="form-control" id="cateforglasses" name="cate">
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
    <button type="submit" class="btn btn-primary" name="submit">Add</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</form>