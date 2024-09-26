<?php
include 'config/koneksi.php';
include 'proses/ppdb_simpan.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PPDB - SMK ST. Aloisius Ruteng</title>
  <link rel="stylesheet" href="assets/css/ppdb.css"> <!-- jika ada CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- Halaman Pendaftaran -->
  <style>
    body {
      background-color: #f7f9fc;
      font-family: 'Arial', sans-serif;
    }

    .form-container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-top: 50px;
    }

    .form-title {
      font-size: 24px;
      font-weight: 600;
      color: #007bff;
      margin-bottom: 20px;
      text-align: center;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

    .form-group label {
      font-weight: 500;
    }

    .form-control:focus {
      border-color: #007bff;
      box-shadow: none;
    }
  </style>
</head>

<body>
  <header class="sticky-header">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">PPDB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPPDB"
          aria-controls="navbarPPDB" aria-expanded="false" aria-label="Toggle navigation">
          <!-- Bars-->
          <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
          <!-- Batas Bars-->
        </button>
        <div class="collapse navbar-collapse" id="navbarPPDB">
          <ul class="navbar-nav ms-auto">
            <!-- Dropdown Jurusan -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="jurusanDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Jurusan</a>
              <ul class="dropdown-menu" aria-labelledby="jurusanDropdown">
                <li><a class="dropdown-item" href="teknik_otomotif.php">Teknik Otomotif</a></li>
                <li><a class="dropdown-item" href="teknik_pengelasan.php">Teknik Pengelasan</a></li>
                <li><a class="dropdown-item" href="dkv.php">DKV (Desain Komunikasi Visual)</a></li>
              </ul>
            </li>
            <!-- Dropdown Info -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="infoDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Info</a>
              <ul class="dropdown-menu" aria-labelledby="infoDropdown">
                <li><a class="dropdown-item" href="https://www.colorblindnesstest.org/id/tes-buta-warna/"
                    target="_blank">Tes Buta Warna</a></li>
                <li><a class="dropdown-item" href="https://tesminatbakat.pakbudi.id/" target="_blank">Tes Minat dan
                    Bakat</a></li>
              </ul>
            </li>
            <!-- Daftar Online -->
            <li class="nav-item">
              <a class="nav-link" href="#daftar-online">Daftar Online</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Bagian isi halaman Jurusan -->
  <section id="teknik-otomotif" class="container mt-5">
    <center><img  src="assets/img/smk.png" alt=""></center>
  <h2 class="text-center">Teknik Pengelasan</h2>
  <p>Kompetensi Keahlian Teknik Pengelasan membentuk lulusan terampil, berpengetahuan dan berkarakter unggul sebagai calon tenaga dibidang perencana dan pelaksana Teknik Pengelasan serta juru las yang bersertifikat BNSP pada posisi minimal 3G/3F pada berbagai pengelasan SMAW / MMAW, GMAW dan sebagai calon wirausahaan muda dalam bidang pengelasan.
  </p>
  <br>Tujuan Kompetensi Keahlian Teknik Pengelasan secara umum mengacu pada isi Undang Undang Sistem Pendidikan Nasional (UU SPN) pasal 3 mengenai Tujuan Pendidikan Nasional dan penjelasan pasal 15 yang menyebutkan bahwa  pendidikan kejuruan merupakan pendidikan menengah yang mencetak tenaga ahli profesional dalam bidang Teknik Pengelasan yang berbasis komputer yang berorientasi pada kebutuhan dunia usaha. Secara khusus tujuan Program Keahlian Teknik Pengelasan adalah membekali peserta didik dengan keterampilan, pengetahuan dan sikap agar kompeten; </br>
  <ol>
    <li>Membaca Gambar Tekhnik</li>
    <li>Simulasi Digital</li>
    <li>Teknologi Mekanik</li>
    <li>Kelistrikan Mesin dan Konversi Energi</li>
    <li> Mekanika Teknik dan elemen mesin</li>
    <li>Teknik Pengelasan  OKSI  Asetilin (OAW)</li>
    <li>Teknik Pengelasan Las Busur  Manual (SMAW)</li>
    <li>Teknik Pengelasan Gas Metal (MIG/MAG)</li>
    <li>Teknik Pengelasan Gas Tungsten  (TIG/WIG)</li>
  </ol>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

<?php
$mysqli->close();
?>