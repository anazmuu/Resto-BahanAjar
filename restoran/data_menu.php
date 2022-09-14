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
    <table class="table table-striped">
		<tr>
			<th>NO</th>
			<th>Menu</th>
			<th>Kategori</th>
			<th>Deskripsi</th>
			<th>Harga</th>
            <th>Stock</th>
            <th>Gambar</th>
            <th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$id = 1;
		$data = mysqli_query($koneksi,"select * from menu");
		while($m = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $id++; ?></td>
				<td><?php echo $m['nama_makanan']; ?></td>
				<td><?php echo $m['kategori']; ?></td>
				<td><?php echo $m['deskripsi']; ?></td>
                <td><?php echo $m['harga']; ?></td>
				<td><?php echo $m['stock']; ?></td>
				<td><img src="img/<?php echo $m['gambar']; ?>" height="150" width="150"></td>
				<td>
					<a href="edit.php?id=<?php echo $m['id']; ?>">EDIT</a>
					<a href="hapus_data.php?id=<?php echo $m['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    <a href="tambah_menu.php">Tambah Menu</a>
</div> <!-- Container -->
</body>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

 </html>