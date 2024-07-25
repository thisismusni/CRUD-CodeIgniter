<!DOCTYPE html>
<html>

<head>
    <title>Edit Barang</title>
</head>

<body>
    <h1>Edit Barang</h1>
    <form action="/barang/update" method="POST">
        <?= csrf_field() ?>
        <input type="hidden" name="id" value="<?= $barang['id'] ?>">
        <div>
            <label for="barcode">Barcode:</label>
            <input type="text" id="barcode" name="barcode" value="<?= esc($barang['barcode']) ?>" required>
        </div>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?= esc($barang['nama']) ?>" required>
        </div>
        <div>
            <label for="departmen">Departmen:</label>
            <input type="text" id="departmen" name="departmen" value="<?= esc($barang['departmen']) ?>" required>
        </div>
        <div>
            <label for="uom">UOM:</label>
            <input type="text" id="uom" name="uom" value="<?= esc($barang['uom']) ?>" required>
        </div>
        <div>
            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" value="<?= esc($barang['stok']) ?>" required>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>

</html>