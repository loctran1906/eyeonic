<h3>Update glasses <?=$id['name']?></h3>
<?= $alert ?? '' ?>
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="glassesname">Glasses name</label>
        <input type="text" class="form-control" id="glassesname" name="name" value="<?=$id['name']?>">
    </div>
    <div class="form-group">
        <label for="imagename">Select Image File to Upload:</label>
        <input type="file" class="form-control" id="imagename" name="image">
        <div id='img_contain'>
            <img id="image-preview" align='middle' src="../img/upload/<?=$id['image']?>" alt="your image" title='' height="250"/>
        </div>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description123" rows="3" name="description"><?=$id['description']?></textarea>
    </div>
    <div class="form-group">
        <label for="priceglasses">Price</label>
        <input type="number" class="form-control" id="priceglasses" name="price" value="<?=$id['price']?>">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="brandforglasses">Brand</label>
            <select class="form-control" id="brandforglasses" name="brand">
                <?php foreach ($brand as $item) : ?>
                    <option value="<?= $item['id'] ?>" <?=$id['brand_id'] == $item['id'] ?'selected':'';?>><?= $item['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="cateforglasses">Category</label>
            <select class="form-control" id="cateforglasses" name="cate">
                <?php foreach ($cate as $item) : ?>
                    <option value="<?= $item['id'] ?>" <?=$id['cate_id'] == $item['id'] ?'selected':'';?>><?= $item['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="detail">Detail</label>
        <textarea class="form-control" id="detail" rows="6" name="detail"><?=$id['detail']?></textarea>
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <div class="form-check">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" <?= $id['status'] == 1 ? 'checked' : ''; ?> id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">Enable</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" <?= $id['status'] == 0 ? 'checked' : ''; ?> id="inlineRadio2" value="0">
                <label class="form-check-label" for="inlineRadio2">Disable</label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Update</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</form>