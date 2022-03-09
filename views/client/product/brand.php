<?php foreach ($b as $item) : ?>
    <a class="dropdown-item" href="?request=brand&id=<?= $item['id'] ?>"><?= $item['name'] ?></a>
<?php endforeach; ?>