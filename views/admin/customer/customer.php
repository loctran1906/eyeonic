<h3>Customer contact</h3>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Content</th>
            <th scope="col">Member</th>
            <th scope="col">Sent at</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($customer as $person) : ?>
            <tr>
                <th scope="row"><?= $person['id'] ?></th>
                <td><?= $person['fullname'] ?></td>
                <td><?= $person['address'] ?></td>
                <td>(+84)/<?= $person['phone'] ?></td>
                <td><?= $person['email'] ?></td>
                <td><?= $person['age'] ?></td>
                <td><?= $person['gender'] ?></td>
                <td><?= $person['content'] ?></td>
                <td><?= $person['member'] == 1 ? 'Yup' : 'No' ?></td>
                <td><a href="?request=deletecustomer&id=<?= $person['id'] ?>" onclick="return confirm('Are you sure to delete this cusstomer?')">Xóa</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>