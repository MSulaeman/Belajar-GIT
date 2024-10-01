<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
</style>
<body>
    <h1>Form Kategori</h1>
    <div>
    <form action="tambah1.php">
        <p>Id       : <input type="number" name="id" readonly></p>
        <p>Kategori : <input type="text" name="kategori"></p>
        <button type="submit">Simpan</button>
    </form>
    <hr>
    <h1>Form Product</h1>
    <form action="tambah2.php" class="b">
        <p>Id       : <input type="number" name="id" readonly></p>
        <p>nama     : <input type="text" name="nama"></p>
        <p>Id Kategori : <input type="number" name="id_kategori"></p>
        <button type="submit">Simpan</button>
    </form>
    </div>
</body>
</html>