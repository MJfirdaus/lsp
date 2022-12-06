<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id_barang"];

// query data mahasiswa berdasarkan id-nya
$brg = query("SELECT * FROM tb_barang WHERE id_barang = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil diubah atau tidak
    if( ubahBarang($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'data_barang.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
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
    <title>Ubah Data Barang</title>
</head>
<body>

<h1 style="text-align: center;">Ubah Data Barang</h1>

<form action="" method="post">
<input type="hidden" name="id_barang" value="<?php echo $brg["id_barang"]; ?>">
    <table align="center" cellspacing="10">
    
        <tr>
            <td>Nama barang</td>
            <td><input type="text" name="nama" id="nama" size="50" value="<?php echo $brg["nama_barang"] ?>"></td> 
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" id="harga" size="50" value="<?php echo $brg["harga"] ?>"></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="text" name="stok" id="stok" size="50" value="<?php echo $brg["stok"] ?>"></td>
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
            <td><button type="submit" name="submit">Ubah Data!</button></td>
        </tr>
    </table>
</form>


    
</body>
</html>