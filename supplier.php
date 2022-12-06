<?php
require 'functions.php'; // cara menghubungkan ke file lain 
$supplier = query("SELECT * FROM tb_supplier");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier</title>
</head>
<body>

<h1 style="text-align: center;">Form Data Supplier</h1>

<table border="1" cellpadding="10" cellspacing="0" align="center">

    <tr>
        <th>No.</th>
        <th>Nama Supplier</th>
        <th>No. Telp</th>
        <th>Alamat</th>
        <th>Aksi</th>
        
    </tr>

    <?php $i = 1; // agar id-nya ngurut ?>
    <?php foreach($supplier as $spl) : ?>
    <tr>
        <td><?= $i; ?></td>
        
        <td><?= $spl["nama_supplier"]; ?></td>
        <td><?= $spl["no_tlpn"]; ?></td>
        <td><?= $spl["alamat"]; ?></td>
        <td>
            <button type="button"><a href="tambah_supplier.php">Tambah</a></button>
            <button type="button"><a href="ubah_supplier.php?id_supplier=<?php echo $spl["id_supplier"];?>">Edit</a></button>
            <button type="button"><a href="hapus_supplier.php?id_supplier=<?php echo $spl["id_supplier"];?>" onclick="return confirm('Apakah yakin mau dihapus?');">hapus</a></button>
        </td>
      
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>


</table>
    
</body>
</html>