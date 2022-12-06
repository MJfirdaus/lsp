<?php
require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil di tambahkan atau tidak
    if( tambahBarang($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'data_barang.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'data_barang.php';
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
    <title>Form barang</title>
</head>
<body>

<h1 style="text-align: center;">Form Barang</h1>


<form action="" method="post">
    <table align="center" cellspacing="10">
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama" id="nama" size="50"></td> 
        </tr>
        <tr>
            <td>harga</td>
            <td><input type="text" name="harga" id="harga" size="50"></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="text" name="stok" id="stok" size="50"></td>
        </tr>
        <tr>
            <td>Supplier</td>
            <td>
                <select name="id_supplier">
                    <?php
                        
                        $result = mysqli_query($conn, "SELECT * FROM tb_supplier");
                        while($row = mysqli_fetch_array($result)) {
                            echo "<option $select value=".$row['id_supplier'].">".$row['id_supplier']."-".$row['nama_supplier']."</option>";
                        };
                    ?>  
                </select>
            </td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Tambah Data!</button></td>
        </tr>
    </table>
</form>

</body>
</html>