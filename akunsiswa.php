<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'siswa') {
    header("Location: loginadminkepsek.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Figma Export</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inika:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div style="width: 1440px; height: 1024px; position: relative; background: rgba(220, 229, 204, 0.88); overflow: hidden; border-radius: 25px">
  <div style="width: 219px; height: 78px; left: 317px; top: 390px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #4E6D41; font-size: 35px; font-family: Inika; font-weight: 700; word-wrap: break-word">Dasboard</div>
  <div style="width: 269px; height: 1022px; left: 0px; top: 0px; position: absolute; background: #B4D1AC; border-radius: 25px"></div>
  <img style="width: 61px; height: 57px; left: 28px; top: 257px; position: absolute" src="data.png" />
  <div style="width: 212px; height: 55px; left: 32px; top: 182px; position: absolute; background: #DCE5CC; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) inset; border-radius: 100px"></div>
  <div style="width: 104px; height: 25px; left: 109px; top: 197px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: black; font-size: 15px; font-family: Inika; font-weight: 700; word-wrap: break-word"><a href="akunsiswa.php">Dashboard</a></div>
  <div style="width: 104px; height: 25px; left: 109px; top: 273px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: black; font-size: 15px; font-family: Inika; font-weight: 700; word-wrap: break-word"><a href="input.html">Input Data</a></div>
  <div style="width: 124px; height: 25px; left: 109px; top: 349px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: black; font-size: 15px; font-family: Inika; font-weight: 700; word-wrap: break-word"><a href="hasil.html">Hasil Kelulusan</a></div>
  <img style="width: 48px; height: 48px; left: 34px; top: 186px; position: absolute" src="akun.png" />
  <img style="width: 75px; height: 55px; left: 22px; top: 334px; position: absolute; border-radius: 25px" src="hasilakhir.png" />
  <div style="width: 451px; height: 260px; left: 384px; top: 707px; position: absolute; background: #BFD6B2; box-shadow: 12px 10px 4px rgba(0, 0, 0, 0.25); border-radius: 25px"></div>
  <div style="width: 392px; height: 67px; left: 431px; top: 710px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #4E6D41; font-size: 32px; font-family: Inika; font-weight: 700; word-wrap: break-word">Informasi Pendaftaran</div>
  <div style="width: 451px; height: 260px; left: 864px; top: 707px; position: absolute; background: #BFD6B2; box-shadow: 12px 10px 4px rgba(0, 0, 0, 0.25); border-radius: 25px"></div>
  <div style="width: 154px; height: 54px; left: 1013px; top: 717px; position: absolute; text-align: center; justify-content: center; display: flex; flex-direction: column; color: #4E6D41; font-size: 32px; font-family: Inika; font-weight: 700; word-wrap: break-word">Koperasi</div>
  <div style="width: 378px; height: 54px; left: 909px; top: 785px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #FF0000; font-size: 24px; font-family: Inika; font-weight: 700; word-wrap: break-word">*Tidak Ada Pembelian</div>
  <div style="width: 378px; height: 70px; left: 414px; top: 797px; position: absolute; color: #FF0000; font-size: 24px; font-family: Inika; font-weight: 700; word-wrap: break-word">*Input Data Diri<br/>*Input Dokumen</div>
  <div style="width: 124px; height: 25px; left: 109px; top: 431px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: black; font-size: 15px; font-family: Inika; font-weight: 700; word-wrap: break-word"><a href="koperasisiswa.html">Koperasi</a></div>
  <img style="width: 54px; height: 54px; left: 33px; top: 417px; position: absolute" src="keranjang.png" />
  <div style="width: 260px; height: 19px; left: 317px; top: 449px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #686868; font-size: 19px; font-family: Inika; font-weight: 700; word-wrap: break-word">Selamat Datang, Calon Siswa </div>
  <div style="width: 931px; height: 205px; left: 384px; top: 482px; position: absolute; background: linear-gradient(90deg, #BDD6AF 0%, #5F834A 49%, #BFDDAD 100%); box-shadow: 12px 10px 4px rgba(0, 0, 0, 0.25); border-radius: 25px"></div>
  <div style="width: 21px; height: 21px; left: 591px; top: 530px; position: absolute; background: #396F57; border-radius: 9999px"></div>
  <div style="width: 212px; height: 26px; left: 637px; top: 616px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #4E6D41; font-size: 20px; font-family: Inika; font-weight: 700; word-wrap: break-word">Verifikasi Dokumen</div>
  <div style="width: 21px; height: 21px; left: 591px; top: 619px; position: absolute; background: #396F57; border-radius: 9999px"></div>
  <div style="width: 212px; height: 19px; left: 637px; top: 551px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #575757; font-size: 13px; font-family: Inika; font-weight: 700; word-wrap: break-word">14 Juli 2025 - 1 Agustus 2025</div>
  <div style="width: 212px; height: 17px; left: 637px; top: 642px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #575757; font-size: 13px; font-family: Inika; font-weight: 700; word-wrap: break-word">2 Agustus 2025  - 8 Agustus 2025</div>
  <div style="width: 212px; height: 17px; left: 978px; top: 551px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #575757; font-size: 13px; font-family: Inika; font-weight: 700; word-wrap: break-word">9 Agustus 2025</div>
  <div style="width: 212px; height: 17px; left: 978px; top: 636px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #575757; font-size: 13px; font-family: Inika; font-weight: 700; word-wrap: break-word">9 Agustus 2025 - 17 Agustus 2025</div>
  <div style="width: 212px; height: 26px; left: 637px; top: 527px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #4E6D41; font-size: 20px; font-family: Inika; font-weight: 700; word-wrap: break-word">Registrasi Online</div>
  <div style="width: 21px; height: 21px; left: 927px; top: 530px; position: absolute; background: #396F57; border-radius: 9999px"></div>
  <div style="width: 209px; height: 26px; left: 978px; top: 616px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #4E6D41; font-size: 20px; font-family: Inika; font-weight: 700; word-wrap: break-word">Administrasi</div>
  <div style="width: 21px; height: 21px; left: 927px; top: 619px; position: absolute; background: #396F57; border-radius: 9999px"></div>
  <div style="width: 234px; height: 26px; left: 978px; top: 527px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #4E6D41; font-size: 20px; font-family: Inika; font-weight: 700; word-wrap: break-word">Pengumuman Kelulusan</div>
  <div style="width: 68px; height: 0px; left: 940px; top: 619px; position: absolute; transform: rotate(-90deg); transform-origin: top left; border: 2px white solid"></div>
  <div style="width: 68px; height: 0px; left: 603px; top: 619px; position: absolute; transform: rotate(-90deg); transform-origin: top left; border: 2px white solid"></div>
  <img style="width: 1042px; height: 380px; left: 340px; top: -30px; position: absolute; opacity: 0.50; box-shadow: 20px 18px 4px #90AA89; border-radius: 25px" src="sman.jpg" />
  <img style="width: 150px; height: 130px; left: 50px; top: 25px; position: absolute; border-radius: 15px" src="logo.png" />
  <div style="width: 64px; height: 64px; left: 64px; top: 906px; position: absolute; background: #D9D9D9; border-radius: 9999px"></div>
  <div style="width: 40px; height: 25px; left: 155px; top: 925px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: black; font-size: 15px; font-family: Inika; font-weight: 700; word-wrap: break-word">EXIT</div>
  <img style="width: 48px; height: 48px; left: 72px; top: 917px; position: absolute" src="akun.png" />
  <div style="width: 197px; height: 0px; left: 29px; top: 887px; position: absolute; outline: 3px #4E6D41 solid; outline-offset: -1.50px"></div>
  <img style="width: 150px; height: 172px; left: 414px; top: 503px; position: absolute; box-shadow: 15px 4px 4px rgba(0, 0, 0, 0.25)" src="koprasi.png" />
</div>
</body>
</html>