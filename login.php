<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Siswa - Sistem Seleksi Penerimaan Siswa Baru</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1400px;
            margin: 20px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        header {
            background: #4C7640;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo-icon {
            font-size: 1.8rem;
        }
        
        .logo-text {
            font-weight: 600;
            font-size: 1.2rem;
        }
        
        .user-info h2 {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }
        
        .user-info p {
            font-size: 0.85rem;
            opacity: 0.9;
        }
        
        .page-title {
            background: #3a5e30;
            color: white;
            padding: 12px 30px;
            font-size: 1.1rem;
        }
        
        .main-content {
            display: flex;
            min-height: 600px;
        }
        
        .profile-section {
            width: 300px;
            background: #f9f9f9;
            padding: 25px;
            border-right: 1px solid #e0e0e0;
        }
        
        .data-section {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .data-row {
            display: flex;
            flex: 1;
        }
        
        .data-column {
            flex: 1;
            padding: 25px;
            border-right: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .data-column:last-child {
            border-right: none;
        }
        
        .photo-section {
            text-align: center;
            margin-bottom: 25px;
        }
        
        .photo-placeholder {
            width: 150px;
            height: 200px;
            background: #e0e0e0;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #bdbdbd;
            font-weight: 500;
            color: #666;
            border-radius: 5px;
        }
        
        .photo-info {
            font-size: 0.85rem;
            color: #616161;
        }
        
        .timestamp {
            margin-bottom: 25px;
            font-size: 0.85rem;
            color: #616161;
            text-align: center;
            padding: 10px;
            background: white;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
        }
        
        .section-title {
            color: #2E7D32;
            margin-bottom: 20px;
            font-size: 1.1rem;
            padding-bottom: 8px;
            border-bottom: 2px solid #C8E6C9;
        }
        
        .info-item {
            margin-bottom: 15px;
        }
        
        .info-label {
            font-weight: 600;
            color: #424242;
            font-size: 0.85rem;
            margin-bottom: 5px;
        }
        
        .info-value {
            background: white;
            padding: 10px 12px;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
            font-size: 0.9rem;
            min-height: 42px;
        }
        
        .documents-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        
        .document-card {
            background: white;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            text-align: center;
            font-size: 0.85rem;
            transition: transform 0.2s;
        }
        
        .document-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 10px rgba(0,0,0,0.05);
        }
        
        .doc-icon {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: #4C7640;
        }
        
        .doc-title {
            font-weight: 500;
            margin-bottom: 5px;
        }
        
        .doc-status {
            font-size: 0.8rem;
            color: #4C7640;
            font-weight: bold;
        }
        
        .footer {
            text-align: center;
            padding: 15px;
            background: #e8f5e9;
            color: #2E7D32;
            font-size: 0.85rem;
        }
        
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.3s;
            border: none;
            cursor: pointer;
            margin: 20px auto;
        }
        
        .back-button:hover {
            background: #388E3C;
        }
        
        @media (max-width: 1200px) {
            .main-content {
                flex-direction: column;
            }
            
            .profile-section {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #e0e0e0;
            }
            
            .data-row {
                flex-direction: column;
            }
            
            .data-column {
                border-right: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <div class="logo-icon">📚</div>
                <div class="logo-text">SISTEM SELEKSI PPDB</div>
            </div>
            <div class="user-info">
                <h2>Admin Sekolah</h2>
                <p>Kepala Sekolah: XXXX</p>
            </div>
        </header>
        
        <div class="page-title">
            <h1>BIODATA SISWA CALON PESERTA DIDIK</h1>
        </div>
        
        <div class="main-content">
            <div class="profile-section">
                <div class="photo-section">
                    <div class="photo-placeholder">
                        FOTO SISWA 3X4
                    </div>
                    <div class="photo-info">
                        Foto terakhir diunggah: -
                    </div>
                </div>
                
                <div class="timestamp">
                    <strong>Tanggal Daftar:</strong> - | -
                </div>
                
                <h2 class="section-title">HASIL KELULUSAN</h2>
                
                <div class="info-item">
                    <div class="info-label">STATUS</div>
                    <div class="info-value">Belum diumumkan</div>
                </div>
                <div class="info-item">
                    <div class="info-label">TANGGAL PENGUMUMAN</div>
                    <div class="info-value">-</div>
                </div>
            </div>
            
            <div class="data-section">
                <div class="data-row">
                    <div class="data-column">
                        <h2 class="section-title">BIODATA SISWA</h2>
                        
                        <div class="info-item">
                            <div class="info-label">ID CALON</div>
                            <div class="info-value">-</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">NAMA LENGKAP</div>
                            <div class="info-value">-</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">TEMPAT LAHIR</div>
                            <div class="info-value">-</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">TANGGAL LAHIR</div>
                            <div class="info-value">-</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">JENIS KELAMIN</div>
                            <div class="info-value">-</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">AGAMA</div>
                            <div class="info-value">-</div>
                        </div>
                    </div>
                    
                    <div class="data-column">
                        <h2 class="section-title">BIODATA SISWA (LANJUTAN)</h2>
                        
                        <div class="info-item">
                            <div class="info-label">NISN</div>
                            <div class="info-value">-</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">ALAMAT</div>
                            <div class="info-value">-</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">NO HP</div>
                            <div class="info-value">-</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">ASAL SEKOLAH</div>
                            <div class="info-value">-</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">ALAMAT SEKOLAH</div>
                            <div class="info-value">-</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">JARAK SEKOLAH (km)</div>
                            <div class="info-value">-</div>
                        </div>
                    </div>
                </div>
                
                <div class="data-row">
                    <div class="data-column">
                        <h2 class="section-title">ORANG TUA/WALI</h2>
                        
                        <div class="info-item">
                            <div class="info-label">NAMA LENGKAP</div>
                            <div class="info-value">-</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">STATUS</div>
                            <div class="info-value">-</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">NO HP</div>
                            <div class="info-value">-</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">PEKERJAAN</div>
                            <div class="info-value">-</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">HUBUNGAN</div>
                            <div class="info-value">-</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">ALAMAT</div>
                            <div class="info-value">-</div>
                        </div>
                    </div>
                    
                    <div class="data-column">
                        <h2 class="section-title">DOKUMEN PENDUKUNG</h2>
                        <div class="documents-grid">
                            <div class="document-card">
                                <div class="doc-icon">📄</div>
                                <div class="doc-title">Rekap Nilai</div>
                                <div class="doc-status">-</div>
                            </div>
                            <div class="document-card">
                                <div class="doc-icon">🆔</div>
                                <div class="doc-title">Akta Kelahiran</div>
                                <div class="doc-status">-</div>
                            </div>
                            <div class="document-card">
                                <div class="doc-icon">🎓</div>
                                <div class="doc-title">Ijazah/Surat Lulus</div>
                                <div class="doc-status">-</div>
                            </div>
                            <div class="document-card">
                                <div class="doc-icon">🏠</div>
                                <div class="doc-title">Kartu Keluarga</div>
                                <div class="doc-status">-</div>
                            </div>
                            <div class="document-card">
                                <div class="doc-icon">📝</div>
                                <div class="doc-title">Surat Pernyataan</div>
                                <div class="doc-status">-</div>
                            </div>
                            <div class="document-card">
                                <div class="doc-icon">🔢</div>
                                <div class="doc-title">Scan NISN</div>
                                <div class="doc-status">-</div>
                            </div>
                        </div>
                        
                        <h2 class="section-title" style="margin-top: 25px;">PRESTASI</h2>
                        <div class="info-item">
                            <div class="info-label">-</div>
                            <div class="info-value">-</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">-</div>
                            <div class="info-value">-</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; padding: 15px 0;">
            <a href="hasilkepsek.html" class="back-button">
                ← Kembali ke Dashboard
            </a>
        </div>

        <div class="footer">
            <p>Sistem Penerimaan Peserta Didik Baru | SMAN 1 SINGPARNA</p>
        </div>
    </div>
</body>
</html>