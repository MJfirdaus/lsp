<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id_pembeli"];

// query data mahasiswa berdasarkan id-nya
$beli = query("SELECT * FROM tb_pembeli WHERE id_pembeli = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil diubah atau tidak
    if( ubahPembeli($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'data_pembeli.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'data_pembeli.php';
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
    <title>Ubah Data Pembeli</title>
</head>
<body>

<h1 style="text-align: center;">Ubah Data Pembeli</h1>

<form action="" method="post">
<input type="hidden" name="id_pembeli" value="<?php echo $beli["id_pembeli"]; ?>">
    <table align="center" cellspacing="10">
    
        <tr>
            <td>Nama Pembeli</td>
            <td><input type="text" name="nama" id="nama" size="50" value="<?php echo $beli["nama_pembeli"] ?>"></td> 
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><select name="jk" id="jk">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select></td>
        </tr>
        <tr>
            <td>No. Tlpn</td>
            <td><input type="text" name="tlpn" id="tlpn" size="50" value="<?php echo $beli["no_tlpn"] ?>"></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Ubah Data!</button></td>
        </tr>
    </table>
</form>


    
</body>
</html>