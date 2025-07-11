<?php
require_once 'config.php'; // atau koneksi.php kalau itu nama filenya
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM user WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && $user['password'] === $password) {
        $_SESSION['user'] = $user;

        // ✅ Coba print dulu biar tahu role-nya
        // echo "<pre>"; print_r($user); exit;

        

        // Role lainnya tetap bisa login juga
        switch ($user['role']) {
            case 'kepsek':
                header("Location: akunkepsek.php"); break;
            case 'siswa':
                header("Location: akunsiswa.php"); break;
            case 'operator':
                header("Location: akunoperator.php"); break;
            case 'koperasi':
                header("Location: akunkoperasi.php"); break;
            default:
                echo "<script>alert('Role tidak dikenali'); window.location='login.html';</script>"; exit;
        }
    } else {
        echo "<script>alert('Email atau password salah'); window.location='login.html';</script>";
        exit;
    }
}
?>
