<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url("bg3.jpg");
            background-repeat: no-repeat;
            background-size:cover
        }
    </style>
</head>
<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="index.html">Biodata Mahasiswa</a>
            </li>
            <li>
                <a href="Multimedia.html">Profil Universitas</a>
            </li>
            <li>
                <a href="form.php">Formulir</a>
            </li>

            <li>
                <input type="text" placeholder="Search Here">
            </li>
        </ul>
    </div>
    
    <nav>
            <div id="menu-icon">
                <i class="fas fa-bars"></i>
            </div>
            <ul>
                <li>
                    <a href="index.html">Biodata Mahasiswa</a>
                </li>
                <li>
                    <a href="Multimedia.html">Profil Universitas</a>
                </li>
                <li>
                    <a class="active" href="form.php">Formulir</a>
                </li>
                <li>
                    <div id="search-icon">
                        <i class="fas fa-search"></i>
                    </div>
                </li>
            </ul>
        </nav>

  <div id="searchbox">
      <input type="text" placeholder="Search Here">
  </div>

  <main>
    <h2 class="page-heading">Formulir PPDB Jalur Zonasi Tahun 2020</h2>
<!--form-->
<div class="form">
  <h2>Data Calon Peserta</h2>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <p>Nama Lengkap:</p>
          <input type="text" name="nama-lengkap" size="55">
      <p>NIK:</p>
          <input type="text" name="nik" size="55">
      <p>NISN:</p>
          <input type="text" name="nisn" size="55">
      <p>Asal Sekolah:</p>
          <input type="text" name="asal-sekolah" size="55">
      <p>Tahun Lulus:</p>
          <input type="text" name="tahun-lulus" size="55">
      <p>Jenis Kelamin:</p>
          Laki-Laki <input type="radio" name="jenis-kelamin" value="L">
          Perempuan <input type="radio" name="jenis-kelamin" value="P">
      <p>Alamat Tinggal:</p>
          <input type="text" name="alamat" size="55">
      <p>Tempat Lahir:</p>
          <input type="text" name="tempat-lahir" size="55">
      <p>Tanggal lahir:</p>
            <input type="date" name="tanggal" />
      <p>Email :</p>
          <input type="text" name="email" size="55"><br>
      <p>Agama:</p>
          <select name="agama1">
              <option value="agama-islam">Islam</option>
              <option value="agama-kristen">Kristen</option>
              <option value="agama-katholik">Katholik</option>
              <option value="agama-hindu">Hindu</option>
              <option value="agama-budha">Budha</option>
          </select>
      <h2>Data Orang Tua</h2>   
      <p>Nomor Kartu Keluarga:</p>
          <textarea name="nomor-kk" cols="50" rows="8"></textarea>
      <p>Nama Ayah Kandung:</p>
          <input type="text" name="nama-ayah" size="55">
      <p>Agama:</p>
          <select name="agama2">
              <option value="agama-islam">Islam</option>
              <option value="agama-kristen">Kristen</option>
              <option value="agama-katholik">Katholik</option>
              <option value="agama-hindu">Hindu</option>
              <option value="agama-budha">Budha</option>
          </select>
       <p>Pekerjaan:</p>
          <input type="text" name="pekerjaan1" size="55">
          <p>Nama Ibu Kandung:</p>
          <input type="text" name="nama-ibu" size="55">
          <p>Agama:</p>
          <select name="agama3">
              <option value="agama-islam">Islam</option>
              <option value="agama-kristen">Kristen</option>
              <option value="agama-katholik">Katholik</option>
              <option value="agama-hindu">Hindu</option>
              <option value="agama-budha">Budha</option>
          </select>
          <p>Pekerjaan:</p>
          <input type="text" name="pekerjaan2" size="55">
          <p>Alamat Orang tua:</p>
          <input type="text" name="alamat-ortu" size="55">  
      <br><br>
          <input type="submit" value="kirim" style="background-color: #01b15a;padding: 10px 15px;color:white;border-radius:7px;">&nbsp&nbsp&nbsp&nbsp
          <input type="reset" value="cancel" style="background-color: #f05454;padding: 10px 15px;color:white;border-radius:7px;">
  </form>
</div>
<!--komentar-->
<div class="komentar">
        <h3>Cek Data Calon Peserta</h3>
        <div class="nama">
            <?php
                if(isset($_POST['nama-lengkap'])){
                    $nama = $_POST['nama-lengkap'];
                    echo $nama;
                }
                ?>
        </div>
        <div class="nik">
            <?php
                if(isset($_POST['nik'])){
                    $nik = $_POST['nik'];
                    echo $nik;
                }
                ?>
        </div>
        <div class="nisn">
            <?php
                if(isset($_POST['nisn'])){
                    $nisn = $_POST['nisn'];
                    echo $nisn;
                }
                ?>
        </div>
        <div class="asal-sekolah">
            <?php
                if(isset($_POST['asal-sekolah'])){
                    $asal = $_POST['asal-sekolah'];
                    echo $asal;
                }
                ?>
        </div>
        <div class="tahun-lulus">
            <?php
                if(isset($_POST['tahun-lulus'])){
                    $tahun = $_POST['tahun-lulus'];
                    echo $tahun;
                }
                ?>
        </div>
        <div class="Jenis-Kelamin">
            <?php
                if(isset($_POST['jenis-kelamin'])){
                    $jenis = $_POST['jenis-kelamin'];
                    echo $jenis;
                }
                ?>
        </div>
        <div class="alamat-tinggal">
            <?php
                if(isset($_POST['alamat-tinggal'])){
                    $alamat = $_POST['alamat-tinggal'];
                    echo $alamat;
                }?>
        </div>
        <div class="tempat-lahir">
            <?php
                if(isset($_POST['tempat-lahir'])){
                    $tempat = $_POST['tempat-lahir'];
                    echo $tempat;
                }?>
        </div>
        <div class="tanggal-lahir">
            <?php
                if(isset($_POST['tanggal'])){
                    $tanggal = $_POST['tanggal'];
                    echo $tanggal;
                }?>
        </div>
        <div class="email">
            <?php
                if(isset($_POST['email'])){
                    $email = $_POST['email'];
                    echo $email;
                }?>
        </div>
        <div class="agama">
            <?php
                if(isset($_POST['agama1'])){
                    $agama = $_POST['agama1'];
                    echo $agama;
                }?>
        </div>
        <h3>Cek Data Orang Tua</h3>
        <div class="nomor-kk">
            <?php
                if(isset($_POST['nomor-kk'])){
                    $nomorkk = $_POST['nomor-kk'];
                    echo $nomorkk;
                }?>
        </div>
        <div class="nama-ayah">
            <?php
                if(isset($_POST['nama-ayah'])){
                    $namaayah = $_POST['nama-ayah'];
                    echo $namaayah;
                }?>
        </div>  
        <div class="agama">
            <?php
                if(isset($_POST['agama2'])){
                    $agama2 = $_POST['agama2'];
                    echo $agama2;
                }?>
        </div>
        <div class="pekerjaan">
            <?php
                if(isset($_POST['pekerjaan1'])){
                    $pekerjaan1 = $_POST['pekerjaan1'];
                    echo $pekerjaan1;
                }?>
        </div>
        <div class="nama-ibu">
            <?php
                if(isset($_POST['nama-ibu'])){
                    $namaibu = $_POST['nama-ibu'];
                    echo $namaibu;
                }?>
        </div>
        <div class="agama">
            <?php
                if(isset($_POST['agama3'])){
                    $agama3 = $_POST['agama3'];
                    echo $agama3;
                }?>
        </div>
        <div class="pekerjaan">
            <?php
                if(isset($_POST['pekerjaan2'])){
                    $pekerjaan2 = $_POST['pekerjaan2'];
                    echo $pekerjaan2;
                }?>
        </div>
        <div class="alamat-ortu">
            <?php
                if(isset($_POST['alamat-ortu'])){
                    $alamatortu = $_POST['alamat-ortu'];
                    echo $alamatortu;
                }?>
        </div>
    </div>

</body>

</html>