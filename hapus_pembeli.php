<?php
require 'functions.php';

$id = $_GET["id_pembeli"]; // tangkap id

if( hapusPembeli($id) > 0 ) {
    echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'data_pembeli.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'data_pembeli.php';
            </script>
        ";
}


?>