<?php
require 'functions.php'; // cara menghubungkan ke file lain 
$barang = query("SELECT * FROM tb_barang");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>

<h1 style="text-align: center;">Data Barang</h1>

<table border="1" cellpadding="10" cellspacing="0" align="center">

    <tr>
        <th>No.</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Supplier</th>
        <th>Aksi</th>
        
    </tr>

    <?php $i = 1; // agar id-nya ngurut ?>
    <?php foreach($barang as $brg) : ?>
    <tr>
        <td><?= $i; ?></td>
        
        <td><?= $brg["nama_barang"]; ?></td>
        <td><?= $brg["harga"]; ?></td>
        <td><?= $brg["stok"]; ?></td>
        <td><?= $brg["id_supplier"]; ?></td>
        <td>
            <button type="button"><a href="form_barang.php">Tambah</a></button>
            <button type="button"><a href="ubah_barang.php?id_barang=<?php echo $brg["id_barang"];?>">Edit</a></button>
            <button type="button"><a href="hapus_barang.php?id_barang=<?php echo $brg["id_barang"];?>" onclick="return confirm('Apakah yakin mau dihapus?');">hapus</a></button>
        </td>
      
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>


</table>
    
</body>
</html>