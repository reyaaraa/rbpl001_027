<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    
    // Upload gambar
    $gambar = $_FILES['gambar']['name'];
    $target = "images/".basename($gambar);
    move_uploaded_file($_FILES['gambar']['tmp_name'], $target);
    
    $sql = "INSERT INTO barang (nama_barang, kategori, stok, harga, gambar) 
            VALUES ('$nama', '$kategori', $stok, $harga, '$gambar')";
    
    if ($koneksi->query($sql) {
        header("Location: databarang.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>

<!-- FORM TAMBAH BARANG -->