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
        $batas   = 3;
        $halaman = @$_GET['halaman'];
            if(empty($halaman)){
                $posisi  = 0;
                $halaman = 1;
            }
            else{
                $posisi  = ($halaman-1) * $batas;
            }
		$id = $posisi+1;
        $sql="select * from menu order by id limit $posisi,$batas";
		$data = mysqli_query($koneksi,$sql);
		while($m = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $id; ?></td>
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
            $id++;
		}
		?>
	</table>
        <?php
            $query2     = mysqli_query($koneksi, "select * from menu");
            $jmldata    = mysqli_num_rows($query2);
            $jmlhalaman = ceil($jmldata/$batas);
        ?>
        
	<ul class="pagination">
    <?php
            for($i=1;$i<=$jmlhalaman;$i++) {
                if ($i != $halaman) {
                    echo "<li class='page-item'><a class='page-link' href='data_menu_list.php?halaman=$i'>$i</a></li>";
                } else {
                    echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
                }
            }
            ?>
	</ul> 
    <a href="tambah_menu.php">Tambah Menu</a>
</div> <!-- Container -->
</body>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

 </html>