<div style="background-image: url('img/banner/forbrand.jpg'); padding: 100px 100px;" class="bannerforbrand">
    <div class="title" style="position: relative; z-index:1">
        <h1 style="color:#fff"><?=$brand['name'] ?></h1>
        <p style="color:#fff; width:50%"><?=$brand['description'] ?></p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row" id="datapagi">
                <?php foreach ($glasses as $item) : ?>
                    <div class="col-md-4">
                        <div class="item-productbrand" style="position: relative;">
                            <div style="width:100%"><a href="?request=detail&id=<?= $item['id'] ?>"><img src="img/upload/<?= $item['image'] ?>" alt="" height="120"></a></div>
                            <h3 style="height: 100px;"><a style="font-size: 28px;" href="?request=detail&id=<?= $item['id'] ?>"><?= $item['brand'] ?> - <?= $item['name'] ?></a></h3>
                            <div class="flex-center price">
                                <span style="color: red; font-weight:800">Price: <?= number_format($item['price'], 0, ',', '.') . '$ ' ?></span>
                                <span style="font-weight:800">Type: <?= $item['cate'] ?></span>
                            </div>
                            <div style="position: absolute; top: 0; right: 0"><a class="btn btn-primary btn-sm" href="?request=contact">Order</a></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>