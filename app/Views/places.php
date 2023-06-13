<!-- app/Views/places.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Places</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/css/style.css') ?>">
</head>
<body>
    <h1>Places</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Created At</th>
        </tr>
        <?php foreach ($places as $place) : ?>
            <tr>
                <td><?= $place['id'] ?></td>
                <td><?= $place['name'] ?></td>
                <td><?= $place['description'] ?></td>
                <td><img src="<?= base_url('public/images/' . $place['image']) ?>" width="100"></td>
                <td><?= $place['created_at'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
