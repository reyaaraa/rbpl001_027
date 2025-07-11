<?php 
include 'koneksi.php';
session_start();

// Proses pencarian
$search = '';
if(isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM barang WHERE nama_barang LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM barang";
}

$result = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <!-- ... (head sesuai desain) ... -->
</head>
<body>
    <!-- ... (sidebar tetap) ... -->
    
    <!-- Form Pencarian -->
    <div style="width: 313px; height: 40px; left: 1307px; top: 154px; position: absolute; background: #B4D1AC; border-radius: 100px">
        <form method="GET" action="databarang.php">
            <input type="text" name="search" placeholder="Cari barang..." 
                   value="<?= htmlspecialchars($search) ?>"
                   style="width: 80%; border: none; background: transparent; padding: 10px;">
            <button type="submit" style="background: none; border: none; cursor: pointer;">
                <img src="cari.png" alt="Search" style="width: 36px; height: 36px;">
            </button>
        </form>
    </div>
    
    <div class="product-grid">
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="images/<?= $row['gambar'] ?>" alt="<?= $row['nama_barang'] ?>">
                    </div>
                    <div class="product-info">
                        <h3><?= $row['nama_barang'] ?></h3>
                        <p>Stok: <?= $row['stok'] ?></p>
                        <p>Rp <?= number_format($row['harga'], 0, ',', '.') ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Tidak ada barang tersedia</p>
        <?php endif; ?>
    </div>
</body>
</html>