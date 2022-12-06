<?php
require 'functions.php'; // cara menghubungkan ke file lain 
$pembeli = query("SELECT * FROM tb_pembeli");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembeli</title>
</head>
<body>

<h1 style="text-align: center;">Data Pembeli</h1>

<table border="1" cellpadding="10" cellspacing="0" align="center">

    <tr>
        <th>No.</th>
        <th>Nama Pembeli</th>
        <th>Jenis Kelamin</th>
        <th>No. tlpn</th>
        <th>Aksi</th>
        
    </tr>

    <?php $i = 1; // agar id-nya ngurut ?>
    <?php foreach($pembeli as $beli) : ?>
    <tr>
        <td><?= $i; ?></td>
        
        <td><?= $beli["nama_pembeli"]; ?></td>
        <td><?= $beli["jk"]; ?></td>
        <td><?= $beli["no_tlpn"]; ?></td>
        <td>
            <button type="button"><a href="form_pembeli.php">Tambah</a></button>
            <button type="button"><a href="ubah_pembeli.php?id_pembeli=<?php echo $beli["id_pembeli"];?>">Edit</a></button>
            <button type="button"><a href="hapus_pembeli.php?id_pembeli=<?php echo $beli["id_pembeli"];?>" onclick="return confirm('Apakah yakin mau dihapus?');">hapus</a></button>
        </td>
      
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>


</table>
    
</body>
</html>