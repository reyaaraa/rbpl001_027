<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = '$email'";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();
        
        // Verifikasi password (gunakan password_verify jika menggunakan password_hash)
        if (hash('sha256', $password) === $admin['password']) {
            $_SESSION['admin'] = $admin['id_admin'];
            header("Location: dashboard.php");
            exit;
        }
    }
    
    $_SESSION['error'] = "Email atau password salah";
    header("Location: index.php");
    exit;
}