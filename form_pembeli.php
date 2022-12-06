<?php
require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil di tambahkan atau tidak
    if( tambahPembeli($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'data_pembeli.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
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
    <title>Form Pembeli</title>
</head>
<body>

<h1 style="text-align: center;">Form Pembeli</h1>


<form action="" method="post">
    <table align="center" cellspacing="10">
        <tr>
            <td>Nama Pembeli</td>
            <td><input type="text" name="nama" id="nama" size="50"></td> 
        </tr>
        <tr>
            <td>Jenis Kelamin </td>
            <td><select name="jk" id="jk">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>  
                </select></td>
        </tr>
        <tr>
            <td>No. Tlpn</td>
            <td><input type="text" name="tlpn" id="tlpn" size="50"></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Tambah Data!</button></td>
        </tr>
    </table>
</form>

</body>
</html>