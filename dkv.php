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
  <h2 class="text-center">Desain Komunikasi Visual</h2>
  <p>Desain Komunikasi Visual (DKV) merupakan cabang ilmu desain yang mempelajari konsep komunikasi dan ungkapan kreatif dengan memanfaatkan elemen-elemen visual untuk menyampaikan pesan. 
  </p>
  <p>Mata Pelajaran SMK Desain Komunikasi Visual SMKS St Aloisius ;</p>
  <ul>
    <li>Dasar-dasar Seni Rupa</li>
    <p>Materi pokok mata pelajaran ini adalah membahas mengenai unsur-unsur yang digunakan untuk mewujudkan sebuah karya seni rupa. Unsur-unsur ini diantaranya antara lain adalah titik, garis, bidang, bentuk, ruang, warna, tekstur, dan gelap terang. Titik adalah unsur seni rupa yang paling dasar.</p>
    <li>Gambar</li>
    <p>Mata pelajaran ini membekali siswa dengan teknik, media, dan alat yang digunakan untuk menggambar sesuai jenis gambar yang dibuat.</p>
    <li>Sketsa</li>
    <p>Materi pokok pada mata peajaran ini adalah tentang pengertian, jenis, sejarah awal, perkembahan, dan tokoh seniman sketsa.</p>
    <li>Desain Publikasi</li>
    <p>Desain publikasi akan mempelajari tentang bagaimana merancang hingga membuat konsep karya desain publikasi baik indoor maupun outdoor.  Siswa juga akan dibekali bagaimana mempresentasikan konsep dasar branding dan komunikasi pemasaran dengan desain publikasi, hingga menghitung biaya produksi desain.</p>
    <li> Komputer Grafis</li>
    <p>Pada mata pelajaran Komputer Grafis siswa akan diajarkan untuk mengolah gambar secara digital dengan bantuan software- software yang ada untuk menghasilkan gambar-gambar yang menarik sesuai imajinatif kreatif para desainer. Siswa akan diajarkan dan dilatih menguasai tools-tools dari sebuah software desain, sehingga siswa bisa segera memahami tools yang akan digunakan dalam membuat sebuah karya desain.</p>
    <li>Fotografi</li>
    <p>Pada mata pelajaran Fotografi ini siswa akan dikenalkan dengan berbagai macam jenis kamera, teknik penggunaan kamera, hingga mempresentasikan hasil karya fotografi. Siswa juga akan diajarkan bagaimana fotografi bisa menjadi sarana untuk menyampaikan informasi atau pesan sehingga selain menggunakan prinsip dan teknik secara estetika fotografi juga terdapat strategi untuk menyampaikan pesan tersebut.</p>
    <li>Videografi</li>
    <p>Materi pokok pada mata pelajaran ini adalah bagaimana mempresentasikan konsep dan kegunaan videografi dalam Desain Komunikasi Visual, memahami proses dan teknik videografi hingga mempresentasikan hasil karya videografi. Secara teknis, siswa akan dibekali agar mampu berkarya videografi (membuat scenario iklan/film indie, storyboard, shooting/pengambilan gambar produksi, editing-dubing-pemberian animasi dan melakukan pasca produksi). Selain itu juga membekali peserta didik agar mampu melaksanakan editing video dengan software yang ada misalnya adobe premier,pinnacle dan corel video studio
    </p>
  </ul>
  <br>Profesi dan Bidang Pekerjaan</br>
  <ul>
    <li>Graphic Designer</li>
    <p>Seorang graphic designer bertanggung jawab atas tampilan pada media promosi suatu produk. Tugasnya adalah mulai dari menciptakan ilustrasi, tipografi, fotografi, atau grafis motion baik untuk penerbit maupun media cetak dan elektronik.</p>
    <li>Videographer</li>
    <p>Serorang videograper bertugas untuk merekam gambar. Selain itu videografer juga bertugas mengarahkan, menyunting video, hingga mengatur suara.</p>
    <li>Photographer</li>
    <p>Tanggung jawab seorang fotografer adalah mengambil gambar untuk barang yang dicetak atau barang pameran, mengabadikan peristiwa, mengirimkan pesan kepada masyarakat melalui gambar atau objek yang di foto.</p>
    <li>Advertising</li>
    <p>Advertising menyediakan jasa pembuatan konsep,design percetakan serta penempatan iklan, tergantung dengan jenis usaha advertising. Lulusan Desain Komunikasi Visual sangat tepat untuk bekerja di perusahaan advertising ini.</p>
    <li>Wirausaha / freelancer</li>
    <p>Lulusan SMK Jurusan Desain Komunikasi Visual tidak harus bekerja di sebuah perusahaan tertentu, mereka bisa berwirausaha dangan menjadi freelancer desain grafis, ilustrator, fotografer, animator, web designer, dan lain-lain.</p>
  </ul>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

<?php
$mysqli->close();
?>