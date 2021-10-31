<meta charset="utf-8">
<title>Tambah Data</title>
<link rel="stylesheet" href="style.css">

        
<form class="box" action="" method="post">
     <h1>Tambah Data</h1>
     <input type="text" name="kode" placeholder="Kode Barang">
     <input type="password" name="nama" placeholder="Nama Barang">
     <input type="text" name="harga" placeholder="Harga Barang">
     <input type="submit" name="proses" value="Kirim">
</form>        

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into barang set
    kode = '$_POST[kode]',
    nama = '$_POST[nama]',
    harga = '$_POST[harga]'");

    echo "Data barang telah tersimpan";
}

?>