<?php
require 'functions.php';

$id = $_GET["id_barang"]; // tangkap id

if( hapusBarang($id) > 0 ) {
    echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'data_barang.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'data_barang.php';
            </script>
        ";
}


?>