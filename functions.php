<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "tb_penjualan"); // value: "nama host-nya", "username mysql-nya", "password-nya", "nama database-nya". Ini dibikin variable supaya mempermudah

function query($query) { // membuat function untuk ambil data mahasiswa / query data mahasiswa
    global $conn; // mencari variable $conn, soalnya di dalam fungsi ini tidak ada variable $conn
    $result = mysqli_query($conn, $query); // query data mahasiswa
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) { // ambil data
        $rows[] = $row;
    }
    return $rows;
}
//tambah supplier
function tambah($data) {
    global $conn;
    // ambil data dari setiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]); // htmlspecialchars = agar website kita tidak bisa didisipi script html dan css
    $tlpn = htmlspecialchars($data["tlpn"]);
    $alamat = htmlspecialchars($data["alamat"]);
    
    // query insert data
    $query = "INSERT INTO tb_supplier
              VALUES ('', '$nama', '$tlpn', '$alamat')
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_supplier WHERE id_supplier = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id_supplier"];
    $nama = htmlspecialchars($data["nama"]);
    $tlpn = htmlspecialchars($data["tlpn"]);
    $alamat = htmlspecialchars($data["alamat"]);
    // query ubah data
    $query = "UPDATE tb_supplier SET
                nama_supplier = '$nama',
                no_tlpn = '$tlpn',
                alamat = '$alamat'
              WHERE id_supplier = $id
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//tambah pembeli
function tambahPembeli($data) {
    global $conn;
    // ambil data dari setiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]); // htmlspecialchars = agar website kita tidak bisa didisipi script html dan css
    $jk = htmlspecialchars($data["jk"]);
    $tlpn = htmlspecialchars($data["tlpn"]);
    
    // query insert data
    $query = "INSERT INTO tb_pembeli
              VALUES ('', '$nama', '$jk', '$tlpn')
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusPembeli($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_pembeli WHERE id_pembeli = $id");

    return mysqli_affected_rows($conn);
}

function ubahPembeli($data) {
    global $conn;

    $id = $data["id_pembeli"];
    $nama = htmlspecialchars($data["nama"]);
    $jk = htmlspecialchars($data["jk"]);
    $tlpn = htmlspecialchars($data["tlpn"]);
    // query ubah data
    $query = "UPDATE tb_pembeli SET
                nama_pembeli = '$nama',
                jk = '$jk',
                no_tlpn = '$tlpn'
              WHERE id_pembeli = $id
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// tambah barang
function tambahBarang($data) {
    global $conn;
    // ambil data dari setiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]); // htmlspecialchars = agar website kita tidak bisa didisipi script html dan css
    $harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);
    $id_supplier = htmlspecialchars($data["id_supplier"]);
    
    // query insert data
    $query = "INSERT INTO tb_barang
              VALUES ('', '$nama', '$harga', '$stok','$id_supplier')
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubahBarang($data) {
    global $conn;

    $id = $data["id_barang"];
    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);
    $id_supplier = htmlspecialchars($data["id_supplier"]);
    // query ubah data
    $query = "UPDATE tb_barang SET
                nama_barang = '$nama',
                harga = '$harga',
                stok = '$stok',
                id_supplier ='$id_supplier'
              WHERE id_barang = $id
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusBarang($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_barang WHERE id_barang = $id");

    return mysqli_affected_rows($conn);
}

?>