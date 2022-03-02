<?= $glasses['name'] ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div><img src="img/upload/<?= $glasses['image'] ?>" alt=""></div>
        </div>
        <div class="col-md-6">
            <div>
                <h3><?= $glasses['brand'] ?> - <?= $glasses['name'] ?></h3>
            </div>
            <div class="flex-center price" style="justify-content:space-between;">
                <span style="color: red; font-weight:800">Price: <?= number_format($glasses['price'], 0, ',', '.') . '$ ' ?></span>
                <span style="font-weight:800">Type: <?= $glasses['cate'] ?></span>
            </div>
            <div><strong>Description:</strong> <?= $glasses['description'] ?></div>
            <div class="detailForGlasses"><strong>Detail:</strong> <?= $glasses['detail'] ?></div>
        </div>
    </div>
    <div class="row1">
        <div class="col-md-12 flex-center contactToOrder "><a class="btn btn-primary btn-lg" href="?request=contact">Contact to order</a></div>
    </div>
</div>