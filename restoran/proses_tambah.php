<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$menu = $_POST['nama_makanan'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$stock = $_POST['stock'];
//Ekstensi untuk gambar
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);


if($filename == ""){
    mysqli_query($koneksi,"INSERT INTO menu VALUES('','$menu','$kategori','$deskripsi','$harga','$stock','') ");
}else{
	if(!in_array($ext,$ekstensi) ) {
		header("location:index.php?pesan=gagal_ekstensi");
	}else{
		if($ukuran < 91044070){		
			$xx = $rand.'_'.$filename;
			move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/'.$rand.'_'.$filename);
			$gambar = mysqli_query($koneksi,"INSERT INTO menu VALUES('','$menu','$kategori','$deskripsi','$harga','$stock','$xx')");
		}else{
			header("location:data_menu.php?pesan=gagal_ukuran");
		}
	}
	header("location:data_menu.php");
}

 
?>