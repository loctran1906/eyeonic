<h1>Hãng mới</h1>
<?=$alert??''?>
<form action="" method="post">
    <table style="width:100%" border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="name"></td>
                <td><input type="radio" name="status" value="1">Active<input type="radio" name="status" value="0">Deactive</td>
                <td><input type="submit" value="Tạo hãng"></td>
            </tr>
        </tbody>
    </table>
</form>