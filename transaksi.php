<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pembeli = $_POST['nama_pembeli'];
    $barang_dibeli = $_POST['barang'];
    $total = $_POST['total'];
    
    // Simpan transaksi
    $sql = "INSERT INTO transaksi (nama_pembeli, total) 
            VALUES ('$nama_pembeli', $total)";
    
    if ($koneksi->query($sql)) {
        $transaksi_id = $koneksi->insert_id;
        
        // Simpan detail transaksi
        foreach ($barang_dibeli as $id_barang => $qty) {
            // Dapatkan harga barang
            $harga_sql = "SELECT harga FROM barang WHERE id_barang = $id_barang";
            $harga_result = $koneksi->query($harga_sql);
            $harga_row = $harga_result->fetch_assoc();
            $harga = $harga_row['harga'];
            
            $detail_sql = "INSERT INTO detail_transaksi 
                            (id_transaksi, id_barang, jumlah, harga) 
                            VALUES ($transaksi_id, $id_barang, $qty, $harga)";
            $koneksi->query($detail_sql);
            
            // Update stok
            $update_sql = "UPDATE barang SET stok = stok - $qty 
                            WHERE id_barang = $id_barang";
            $koneksi->query($update_sql);
        }
        
        header("Location: daftarpembelian.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>