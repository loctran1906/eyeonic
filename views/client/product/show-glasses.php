<div class="row" id="datapagi">
    <?php foreach ($glasses as $item) : ?>
        <div class="col-md-4">
            <div class="item-product" style="position: relative;">
                <div style="width:100%"><a href="?request=detail&id=<?= $item['id'] ?>"><img class="image-of-all" src="img/upload/<?= $item['image'] ?>" alt="" height=""></a></div>
                <h3 style="height: 100px;"><a style="font-size: 28px;" href="?request=detail&id=<?= $item['id'] ?>"><?= $item['brand'] ?> - <?= $item['name'] ?></a></h3>
                <div class="flex-center price">
                    <span style="color: red; font-weight:800"><?= number_format($item['price'], 0, ',', '.') . '$ ' ?></span>
                    <span style="font-weight:800"><?= $item['cate'] ?></span>
                </div>
                <div style="position: absolute; top: 0; right: 0"><a class="btn btn-primary btn-sm" href="?request=contact">Order</a></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>