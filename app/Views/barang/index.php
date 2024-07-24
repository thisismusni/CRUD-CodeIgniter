<!DOCTYPE html>
<html>

<head>
    <title>Data Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="my-4">Data Barang</h1>
        <a href="#" class="btn btn-primary mb-3">Tambah Barang</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Barcode</th>
                    <th>Nama</th>
                    <th>Departmen</th>
                    <th>UOM</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($barangs as $barang): ?>
                <tr>
                    <td><?= esc($barang['barcode']) ?></td>
                    <td><?= esc($barang['nama']) ?></td>
                    <td><?= esc($barang['departmen']) ?></td>
                    <td><?= esc($barang['uom']) ?></td>
                    <td><?= esc($barang['stok']) ?></td>
                    <td>
                        <a href="/barang/edit/<?= $barang['id'] ?>">Edit</a>
                        <a href="/barang/delete/<?= $barang['id'] ?>"
                            onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>