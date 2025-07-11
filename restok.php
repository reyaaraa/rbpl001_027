<?php
include 'koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_barang'];
    $tambahan_stok = $_POST['stok'];
    
    $sql = "UPDATE barang SET stok = stok + $tambahan_stok 
            WHERE id_barang = $id";
    
    if ($koneksi->query($sql)) {
        header("Location: restok.php?success=1");
        exit;
    } else {
        $error = "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

// Ambil data barang
$barang_query = "SELECT * FROM barang";
$barang_result = $koneksi->query($barang_query);
?>

<!DOCTYPE html>
<html>
<head>
    <!-- ... (head sesuai desain) ... -->
</head>
<body>
    <!-- ... (sidebar tetap) ... -->
    
    <?php if(isset($error)): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>
    
    <?php if(isset($_GET['success'])): ?>
        <div class="success">Stok berhasil ditambahkan!</div>
    <?php endif; ?>
    
    <div class="product-grid">
        <?php while($barang = $barang_result->fetch_assoc()): ?>
            <div class="product-card">
                <form method="POST" action="restok.php">
                    <input type="hidden" name="id_barang" value="<?= $barang['id_barang'] ?>">
                    
                    <div class="product-image">
                        <img src="images/<?= $barang['gambar'] ?>" alt="<?= $barang['nama_barang'] ?>">
                    </div>
                    
                    <div class="product-info">
                        <h3><?= $barang['nama_barang'] ?></h3>
                        <p>Stok saat ini: <?= $barang['stok'] ?></p>
                        
                        <div class="restok-form">
                            <label for="stok">Tambah Stok:</label>
                            <input type="number" name="stok" min="1" required>
                            <button type="submit">Restok</button>
                        </div>
                    </div>
                </form>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>