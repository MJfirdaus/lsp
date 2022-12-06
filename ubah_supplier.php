<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id_supplier"];

// query data mahasiswa berdasarkan id-nya
$spl = query("SELECT * FROM tb_supplier WHERE id_supplier = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'supplier.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'supplier.php';
            </script>
        ";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Supplier</title>
</head>
<body>

<h1 style="text-align: center;">Ubah Data Supplier</h1>

<form action="" method="post">
<input type="hidden" name="id_supplier" value="<?php echo $spl["id_supplier"]; ?>">
    <table align="center" cellspacing="10">
    
        <tr>
            <td>Nama Supplier</td>
            <td><input type="text" name="nama" id="nama" size="50" value="<?php echo $spl["nama_supplier"] ?>"></td> 
        </tr>
        <tr>
            <td>No. Tlpn </td>
            <td><input type="text" name="tlpn" id="tlpn" size="50" value="<?php echo $spl["no_tlpn"] ?>"></td>
        </tr>
        <tr>
            <td>Alamat  </td>
            <td><input type="text" name="alamat" id="alamat" size="50" value="<?php echo $spl["alamat"] ?>"></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Ubah Data!</button></td>
        </tr>
    </table>
</form>


    
</body>
</html>