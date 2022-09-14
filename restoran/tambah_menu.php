<!DOCTYPE html>
<html>
<head>
    <title>View Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

</head>
<body>
<div class="container">

	<h3>Tambah Menu</h3>
	<form method="post" action="proses_tambah.php" enctype="multipart/form-data">
        
        <div class="mb-3">
            <label for="menu" class="form-label">Menu</label>
            <input type="text" class="form-control" name="nama_makanan">
        </div>
       <!-- <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" class="form-control" name="kategori">
        </div> -->
        <div class="mb-3">
        <label for="menu" class="form-label">Kategori</label>
        <select class="form-select" name="kategori">
            <option value="1">Makanan</option>
            <option value="2">Minuman</option>
            <option value="3">Dessert</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" name="harga">
        </div>
        <div class="mb-3">
        <label for="menu" class="form-label">Stock</label>
        <select class="form-select" name="stock">
            <option value="1">Ready</option>
            <option value="2">Tidak</option>
        </select>
        </div>
        <!-- <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="text" class="form-control" name="stock">
        </div> -->
        <div class="mb-3">
            <label for="formFile" class="form-label">Masukkan Gambar</label>
            <input type="file" class="form-control" name="gambar" required="required">
        </div>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
	</form>
    <a href="index.php">KEMBALI</a>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</html>