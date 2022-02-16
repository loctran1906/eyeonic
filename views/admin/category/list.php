<h3>Category list</h3>
<div class="form-group"><a href="?request=addcate" class="btn btn-success"> Add category</a></div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cate as $item) : ?>
            <tr>
                <th scope="row"><?= $item['id'] ?></th>
                <td><?= $item['name'] ?></td>
                <td><?= $item['status'] == 1 ? 'Active' : 'Deactive' ?></td>
                <td><a href="?request=updatecate&id=<?= $item['id'] ?>">Edit</a></td>
                <td><a href="?request=deletecate&id=<?= $item['id'] ?>" onclick="return confirm('Bạn chắc chắn xóa')">Xóa</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
