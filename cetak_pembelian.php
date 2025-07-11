<?php
include 'koneksi.php';
session_start();

// Header untuk download file CSV
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=daftar_pembelian.csv');

$output = fopen('php://output', 'w');

// Header CSV
fputcsv($output, array('ID Transaksi', 'Tanggal', 'Pembeli', 'Barang', 'Jumlah', 'Total'));

// Ambil data
$sql = "SELECT t.id_transaksi, t.tanggal_transaksi, t.nama_pembeli, 
               b.nama_barang, dt.jumlah, t.total 
        FROM transaksi t
        JOIN detail_transaksi dt ON t.id_transaksi = dt.id_transaksi
        JOIN barang b ON dt.id_barang = b.id_barang";
$result = $koneksi->query($sql);

while ($row = $result->fetch_assoc()) {
    fputcsv($output, $row);
}

fclose($output);
exit;