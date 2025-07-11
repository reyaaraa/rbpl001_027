
<?php
include 'koneksi.php';
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

if (!isset($_SESSION['id_akun'])) {
    echo "Session id_akun tidak ditemukan.";
    exit();
}

echo "<h3>Debugging Form Submission</h3>";
echo "<pre>";
print_r($_POST);
echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_akun = $_SESSION['id_akun'];

    $data = [
        'nama_lengkap' => $_POST['nama_lengkap'],
        'tempat_lahir' => $_POST['tempat_lahir'],
        'tanggal_lahir' => $_POST['tanggal_lahir'],
        'jenis_kelamin' => $_POST['jenis_kelamin'],
        'agama' => $_POST['agama'],
        'NISN' => $_POST['NISN'],
        'alamat' => $_POST['alamat'],
        'no_hp' => $_POST['no_hp'],
        'asal_sekolah' => $_POST['asal_sekolah'],
        'alamat_sekolah' => $_POST['alamat_sekolah'],
        'jarak_sekolah' => $_POST['jarak_sekolah']
    ];

    $sql = "INSERT INTO calon_siswa (
        id_akun, nama_lengkap, tempat_lahir, tanggal_lahir, 
        jenis_kelamin, agama, NISN, alamat, no_hp, 
        asal_sekolah, alamat_sekolah, jarak_sekolah
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        echo "Gagal prepare statement: " . $conn->error;
        exit();
    }

    $stmt->bind_param(
        "isssssisisss",
        $id_akun,
        $data['nama_lengkap'],
        $data['tempat_lahir'],
        $data['tanggal_lahir'],
        $data['jenis_kelamin'],
        $data['agama'],
        $data['NISN'],
        $data['alamat'],
        $data['no_hp'],
        $data['asal_sekolah'],
        $data['alamat_sekolah'],
        $data['jarak_sekolah']
    );

    if ($stmt->execute()) {
        echo "<p><strong>✅ Data calon siswa berhasil disimpan!</strong></p>";
        $id_calon = $stmt->insert_id;
        $_SESSION['id_calon'] = $id_calon;
    } else {
        echo "<p><strong>❌ Gagal menyimpan:</strong> " . $stmt->error . "</p>";
    }

    $stmt->close();
}
$conn->close();
?>
