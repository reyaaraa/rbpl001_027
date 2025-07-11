<?php
include 'koneksi.php';
session_start();

// Ambil data transaksi
$sql = "SELECT t.*, dt.jumlah, b.nama_barang 
        FROM transaksi t
        JOIN detail_transaksi dt ON t.id_transaksi = dt.id_transaksi
        JOIN barang b ON dt.id_barang = b.id_barang";
$result = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <!-- ... (head sesuai desain) ... -->
</head>
<body>
    <!-- ... (sidebar tetap) ... -->
    
    <!-- Tombol Unduh -->
    <div style="width: 112px; height: 39px; left: 1541px; top: 923px; position: absolute; background: #90AA89; border-radius: 5px">
        <a href="cetak_pembelian.php" style="text-decoration: none; color: #FEFEFE;">
            <div style="width: 90px; height: 14px; left: 1552px; top: 936px; position: absolute; text-align: center; justify-content: center; display: flex; flex-direction: column; color: #FEFEFE; font-size: 14px; font-family: Inika; font-weight: 700; word-wrap: break-word">
                Unduh
            </div>
        </a>
    </div>
    
    <div class="purchase-list">
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="purchase-card">
                    <div class="purchase-header">
                        <h3>Transaksi #<?= $row['id_transaksi'] ?></h3>
                        <span><?= $row['tanggal_transaksi'] ?></span>
                    </div>
                    
                    <div class="purchase-details">
                        <p><strong>Pembeli:</strong> <?= $row['nama_pembeli'] ?></p>
                        <p><strong>Barang:</strong> <?= $row['nama_barang'] ?> (<?= $row['jumlah'] ?> pcs)</p>
                        <p><strong>Total:</strong> Rp <?= number_format($row['total'], 0, ',', '.') ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Tidak ada transaksi</p>
        <?php endif; ?>
    </div>
</body>
</html>