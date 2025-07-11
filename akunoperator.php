<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'operator') {
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
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div style="width: 1780px; height: 1197px; position: relative; background: rgba(220, 229, 204, 0.88); overflow: hidden; border-radius: 25px">
  <div style="width: 272px; height: 1196px; left: 0px; top: 0px; position: absolute; background: #B4D1AC; border-radius: 25px"></div>
  <div style="width: 212px; height: 55px; left: 33px; top: 206px; position: absolute; background: #DCE5CC; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) inset; border-radius: 100px"></div>
  <div style="width: 427px; height: 139px; left: 367px; top: 44px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #4E6D41; font-size: 40px; font-family: Inika; font-weight: 700; word-wrap: break-word">Dasboard</div>
  <div style="width: 426px; height: 33px; left: 368px; top: 126px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #686868; font-size: 20px; font-family: Inika; font-weight: 700; word-wrap: break-word">Selamat Datang, operator</div>
  <div style="width: 606px; height: 516px; left: 367px; top: 177px; position: absolute; background: linear-gradient(89deg, #B4D1AC 0%, #A6ACA4 100%); box-shadow: 15px 15px 4px rgba(0, 0, 0, 0.51); border-radius: 25px"></div>
  <div style="width: 430px; height: 78px; left: 455px; top: 198px; position: absolute; text-align: center; justify-content: center; display: flex; flex-direction: column; color: #46613B; font-size: 35px; font-family: Inika; font-weight: 700; word-wrap: break-word">Total Pendaftar</div>
  <div style="width: 104px; height: 25px; left: 109px; top: 300px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: black; font-size: 15px; font-family: Inika; font-weight: 700; word-wrap: break-word"><a href="akunpendaftar.html">Pendaftar</a></div>
  <img style="width: 61.56px; height: 57px; left: 28px; top: 284px; position: absolute" src="data.png" />
  <div style="width: 460px; height: 157px; left: 440px; top: 759px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #686868; font-size: 24px; font-family: Inika; font-weight: 700; word-wrap: break-word">Jumlah Pendaftar Perempuan : 45 Orang<br/><br/>Jumlah Pendaftar Laki Laki     : 55 Orang<br/><br/>Total Pendaftar                           : 100 Orang</div>
  <div style="width: 124px; height: 25px; left: 109px; top: 376px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: black; font-size: 15px; font-family: Inika; font-weight: 700; word-wrap: break-word"><a href="hasiloperator.html">Hasil Seleksi</a></div>
  <img style="width: 88px; height: 55px; left: 16px; top: 361px; position: absolute; border-radius: 25px" src="hasil.png" />
  <div style="width: 104px; height: 25px; left: 109px; top: 222px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: black; font-size: 15px; font-family: Inika; font-weight: 700; word-wrap: break-word">Dashboard</div>
  <img style="width: 60px; height: 60px; left: 29px; top: 204px; position: absolute" src="akun.png" />
  <div style="width: 124px; height: 25px; left: 112px; top: 517px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: black; font-size: 15px; font-family: Inika; font-weight: 700; word-wrap: break-word">Koperasi</div>
  <img style="width: 54px; height: 54px; left: 34px; top: 503px; position: absolute" src="keranjang.png" />
  <div style="width: 124px; height: 25px; left: 109px; top: 447px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: black; font-size: 15px; font-family: Inika; font-weight: 700; word-wrap: break-word"><a href="hasilakhiroperator.html">Hasil Akhir</a></div>
  <img style="width: 40px; height: 40px; left: 41px; top: 436px; position: absolute" src="hasilakhir.png" />
  <img style="width: 200px; height: 180px; left: 21.35px; top: 15px; position: absolute; border-radius: 15px" src="logo.png" />
  <div style="width: 64px; height: 64px; left: 73px; top: 1090px; position: absolute; background: #D9D9D9; border-radius: 9999px"></div>
  <div style="width: 40px; height: 25px; left: 164px; top: 1109px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: black; font-size: 15px; font-family: Inika; font-weight: 700; word-wrap: break-word">EXIT</div>
  <img style="width: 48px; height: 48px; left: 81px; top: 1101px; position: absolute" src="exit.png" />
  <div style="width: 197px; height: 0px; left: 38px; top: 1071px; position: absolute; outline: 3px #4E6D41 solid; outline-offset: -1.50px"></div>
  <div style="width: 187px; height: 43px; left: 761px; top: 1009px; position: absolute; background: #90AA89; border-radius: 5px"></div>
  <div style="width: 161px; height: 17px; left: 775px; top: 1022px; position: absolute; text-align: center; justify-content: center; display: flex; flex-direction: column; color: #FEFEFE; font-size: 11px; font-family: Inika; font-weight: 700; word-wrap: break-word">LEARN MORE →</div>
  <div style="width: 411px; height: 194px; left: 1191px; top: 375px; position: absolute; background: linear-gradient(89deg, #B4D1AC 0%, #A6ACA4 100%); box-shadow: 15px 15px 4px rgba(0, 0, 0, 0.51); border-radius: 25px"></div>
  <div style="width: 293px; height: 157px; left: 1250px; top: 400px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #193E25; font-size: 24px; font-family: Inika; font-weight: 700; word-wrap: break-word">Total Pendaftar Hari ini <br/>100 Calon Siswa</div>
  <img style="width: 322px; height: 242px; left: 1293px; top: 177px; position: absolute" src="gambar.png" />
  <div style="width: 568px; left: 1109px; top: 700px; position: absolute; overflow: hidden; justify-content: center; align-items: flex-start; display: inline-flex; flex-wrap: wrap; align-content: flex-start">
    <div style="padding-left: 8px; padding-right: 8px; overflow: hidden; justify-content: center; align-items: center; gap: 8px; display: flex; flex-wrap: wrap; align-content: center">
      <div style="padding: 4px; overflow: hidden; justify-content: flex-start; align-items: center; gap: 4px; display: flex">
        <div style="width: 16px; height: 16px; position: relative">
          <div style="width: 16px; height: 2px; left: 0px; top: 7px; position: absolute; background: #5C9B4A"></div>
          <div style="width: 1px; height: 1px; left: 8px; top: 8px; position: absolute">
            <div style="width: 8px; height: 8px; left: -4px; top: -4px; position: absolute; background: #B4D1AC; border-radius: 9999px; border: 1px #5C9B4A solid"></div>
          </div>
        </div>
        <div style="color: #416F49; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word">2025</div>
      </div>
    </div>
  </div>
  <div style="width: 600px; height: 400px; padding-top: 32px; padding-bottom: 16px; padding-left: 16px; padding-right: 16px; left: 1108px; top: 663px; position: absolute; background: #B4D1AC; box-shadow: 0px 15px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px"></div>
  <div style="width: 568px; left: 1109px; top: 724px; position: absolute; border-radius: 25px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
    <div style="align-self: stretch; height: 307px; justify-content: flex-start; align-items: center; display: inline-flex">
      <div style="align-self: stretch; padding-left: 4px; padding-right: 4px; flex-direction: column; justify-content: space-between; align-items: flex-end; display: inline-flex">
        <div style="color: #1E640A; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word">200</div>
        <div style="color: #1E640A; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word">160</div>
        <div style="color: #1E640A; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word">120</div>
        <div style="color: #1E640A; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word">80</div>
        <div style="color: #1E640A; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word">40</div>
        <div style="color: #1E640A; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word">0</div>
      </div>
      <div style="flex: 1 1 0; align-self: stretch; position: relative">
        <div style="width: 537px; height: 307px; padding-left: 1px; padding-right: 1px; padding-top: 6px; padding-bottom: 6px; left: 0px; top: 0px; position: absolute; flex-direction: column; justify-content: space-between; align-items: flex-start; display: inline-flex">
          <div style="align-self: stretch; height: 0px; outline: 1px rgba(99.79, 141.97, 102.60, 0.25) solid; outline-offset: -0.50px"></div>
          <div style="align-self: stretch; height: 0px; outline: 1px rgba(99.79, 141.97, 102.60, 0.25) solid; outline-offset: -0.50px"></div>
          <div style="align-self: stretch; height: 0px; outline: 1px rgba(99.79, 141.97, 102.60, 0.25) solid; outline-offset: -0.50px"></div>
          <div style="align-self: stretch; height: 0px; outline: 1px rgba(99.79, 141.97, 102.60, 0.25) solid; outline-offset: -0.50px"></div>
          <div style="align-self: stretch; height: 0px; outline: 1px rgba(99.79, 141.97, 102.60, 0.25) solid; outline-offset: -0.50px"></div>
          <div style="align-self: stretch; height: 0px; outline: 1px rgba(85.63, 112.54, 72.18, 0.50) solid; outline-offset: -0.50px"></div>
        </div>
        <div style="width: 537px; height: 307px; padding-left: 1px; padding-right: 1px; padding-top: 6px; padding-bottom: 6px; left: 0px; top: 0px; position: absolute; justify-content: space-between; align-items: flex-start; display: inline-flex">
          <div style="width: 295px; align-self: stretch; transform: rotate(-90deg); transform-origin: top left; outline: 1px rgba(99.79, 141.97, 102.60, 0.25) solid; outline-offset: -0.50px"></div>
          <div style="width: 295px; align-self: stretch; transform: rotate(-90deg); transform-origin: top left; outline: 1px rgba(99.79, 141.97, 102.60, 0.25) solid; outline-offset: -0.50px"></div>
          <div style="width: 295px; align-self: stretch; transform: rotate(-90deg); transform-origin: top left; outline: 1px rgba(99.79, 141.97, 102.60, 0.25) solid; outline-offset: -0.50px"></div>
          <div style="width: 295px; align-self: stretch; transform: rotate(-90deg); transform-origin: top left; outline: 1px rgba(99.79, 141.97, 102.60, 0.25) solid; outline-offset: -0.50px"></div>
        </div>
        <div style="width: 537px; height: 293px; left: 0px; top: 7px; position: absolute">
          <div style="width: 358px; height: 293px; left: 89.50px; top: 0px; position: absolute; background: linear-gradient(180deg, rgba(73.65, 153.74, 66.37, 0.30) 0%, rgba(83.62, 102.98, 81.89, 0.05) 100%)"></div>
          <div style="width: 358px; height: 146.50px; left: 89.50px; top: 0px; position: absolute; box-shadow: 0px 3px 3px rgba(137.05, 121.10, 255, 0.40); outline: 1px #336940 solid; outline-offset: -0.50px"></div>
          <div style="width: 1px; height: 1px; left: 89.50px; top: 146.50px; position: absolute">
            <div style="width: 8px; height: 8px; left: -4px; top: -4px; position: absolute; background: #2C5222; border-radius: 9999px; border: 1px #336940 solid"></div>
          </div>
          <div style="width: 1px; height: 1px; left: 268.50px; top: 136.24px; position: absolute">
            <div style="width: 8px; height: 8px; left: -4px; top: -4px; position: absolute; background: #2C5222; border-radius: 9999px; border: 1px #336940 solid"></div>
          </div>
          <div style="width: 1px; height: 1px; left: 447.50px; top: 0px; position: absolute">
            <div style="width: 8px; height: 8px; left: -4px; top: -4px; position: absolute; background: #2C5222; border-radius: 9999px; border: 1px #336940 solid"></div>
          </div>
        </div>
      </div>
    </div>
    <div style="align-self: stretch; padding-bottom: 8px; padding-left: 31px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
      <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-end; display: inline-flex">
        <div style="align-self: stretch; text-align: center; color: #1E640A; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word">11 Juni</div>
      </div>
      <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-end; display: inline-flex">
        <div style="align-self: stretch; text-align: center; color: #1E640A; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word">12 Juni</div>
      </div>
      <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-end; display: inline-flex">
        <div style="align-self: stretch; text-align: center; color: #1E640A; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word">13</div>
      </div>
    </div>
  </div>
</div>
</body>
</html>