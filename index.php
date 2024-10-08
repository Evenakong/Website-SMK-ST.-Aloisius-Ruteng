<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website SMKS ST. Aloisius Ruteng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- Link ke file CSS eksternal -->
    <link href="assets/css/styles.css" rel="stylesheet" />
  </head>

  <!-- Header -->
  <header class="sticky-header">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <div class="logo d-flex align-items-center">
          <img src="assets/img/smk.png" alt="Logo Sekolah" style="height: 50px; margin-right: 10px" />
          <span>SMKS ST. ALOISIUS RUTENG</span>
        </div>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <!-- Bars-->
        <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
        <!-- Batas Bars-->
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#beranda">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Profil Sekolah </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="tentang_sekolah.php" target="_blank">Tentang Sekolah</a></li>
                <li><a class="dropdown-item" href="visi_misi.php" target="_blank">Visi & Misi</a></li>
              </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#berita">Berita</a>

            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Layanan Digital</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="ppdb.php" target="_blank" >PPDB</a></li>
                <li><a class="dropdown-item" href="data_alumni.php" target="_blank">Alumni</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Batas Header -->

  <!-- Carousel-->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/otomotif.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Teknik Otomotif</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/welding.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Teknik Pengelasan</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/Broadcasting.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Desain Komunikasi Visual</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Batas Carousel-->

  <!-- Sambutan Kepala Sekolah-->
  <div class="container mt-5">
    <h2 class="text-center mb-3">Sambutan Kepala Sekolah</h2>
    <p class="text-justify">
      Puji dan syukur kehadirat Tuhan Yang Maha Esa, dengan rahmat dan karunia-Nya lah akhirnya Website sekolah ini hadir dengan alamat www.smksantoaloisius.sch.id. Kami mengucapkan selamat datang di Website kami, Sekolah Menengah Kejuruan
      Swasta (SMKS) Santo Aloisius yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas sekolah
      kami.SMK Swasta Santo Aloisius menyadari betul dengan perkembangan teknologi segala bentuk informasi bisa didapat dengan waktu yang singkat. Oleh karena itu SMK Swasta Santo Aloisius dengan dukungan sumber daya manusia yang di miliki
      sekolah ini siap untuk berkompetisi dengan sekolah lain dalam pelayanan informasi publik.
    </p>
    <!-- Konten tersembunyi (Akan muncul ketika tombol "Selengkapnya" diklik) -->
    <p class="text-justify d-none" id="more-content">
      Teknologi On-line dan Teknologi Multimedia Mobile sebagai teknologi terkini yang telah diterapkan dalam menunjang proses pendidikannya. PMB On-line, Registrasi on-line, Career on-line di Sekolah Tinggi Teknik Malang, sehingga melalui
      Handphone masing-masing, mahasiswa dapat mengetahui hasil ujian, biaya kuliah, registrasi ulang, berita kampus, dan lain-lain, kapan saja dan dimana saja tanpa harus ke kampus untuk melihat di papan pengumuman.
    </p>
    <!-- Tombol Selengkapnya -->
    <div class="text-center">
      <button id="more-btn" class="btn btn-primary">Selengkapnya</button>
    </div>
  </div>
  <script>
    // JavaScript untuk memperlihatkan/mengembunyikan konten tambahan
    const moreBtn = document.getElementById("more-btn");
    const moreContent = document.getElementById("more-content");

    moreBtn.addEventListener("click", function () {
      if (moreContent.classList.contains("d-none")) {
        // Jika konten tersembunyi, tampilkan
        moreContent.classList.remove("d-none");
        moreBtn.textContent = "Sembunyikan";
      } else {
        // Jika konten sudah tampil, sembunyikan
        moreContent.classList.add("d-none");
        moreBtn.textContent = "Selengkapnya";
      }
    });
  </script>
  <!-- Batas Sambutan Kepala Sekolah-->

  <!-- Card img Berita-->
   <section id="berita">
  <div class="container mt-5">
    <h2 class="text-center mb-3">Berita</h2>
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="assets/img/Card 2.1.jpg" class="card-img-top" alt="Gambar Berita 1" />
          <div class="card-body">
            <h6 class="card-title">PLN UIP Nusra Tuntaskan Pelatihan Konversi Molis di SMK St Aloisius Manggarai</h6>
            <p class="card-text"></p>
            <a href="berita1.php" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="assets/img/Card 2.2.jpg" class="card-img-top" alt="Gambar Berita 2" />
          <div class="card-body">
            <h6 class="card-title">PLN UIP Nusra Tuntaskan Pelatihan Konversi Molis di SMK St Aloisius Manggarai</h6>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="assets/img/Card 2.3.jpg" class="card-img-top" alt="Gambar Berita 3" />
          <div class="card-body">
            <h6 class="card-title">Siswa SMK St. Aloysius Ruteng Raih Predikat Medallion of Excellence Pada LKS Tingkat Nasional</h6>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <!-- Batas Card img Berita-->

  <!-- Video -->
  <section id="video" class="container mt-5">
    <h2 class="text-center mb-3">Video</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/QHLzN-V2AbE?si=r3i1VovFpOEpm0Tc" frameborder="0" allowfullscreen></iframe>
          <div class="card-body">
            <h5 class="card-title">Kegiatan MPLS</h5>
            <p class="card-text">Oleh Kodim 1612 Manggarai.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/YW_pLalGz8M?si=cghHCf-NacQvx-q3" frameborder="0" allowfullscreen></iframe>
          <div class="card-body">
            <h5 class="card-title">Dj Vitoo Kabut</h5>
            <p class="card-text">Karnaval 21 Agustus 2019</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed//-a_wQ7iDHMs?si=mjgdBr6uvvf3rZRC" frameborder="0" allowfullscreen></iframe>
          <div class="card-body">
            <h5 class="card-title">Hut RI 79</h5>
            <p class="card-text">Drumband SMKS ST. Aloisius Ruteng</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Batas Video -->

  <!-- Testimonials/Ulasan-->
  <section id="testimonials" class="container mt-5">
    <h2 class="text-center mb-4">Testimonials</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="assets/img/Pengulas 1.1.jpg" class="rounded-circle" alt="User 1" width="64" height="64" />
              <div class="ml-3">
                <h5 class="mt-0 mb-1">Wilco Durusxyz</h5>
              </div>
            </div>
            <p>"Lokasinya cocok untuk proses KBM. Fasilitas pendukung lengkap serta didukung tenaga pengajar yang berkualitas." <a href="https://g.co/kgs/ebXPDZB" target="_blank" style="text-decoration: none;">Baca selengkapnya</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="assets/img/Pengulas 1.2.jpg" class="rounded-circle" alt="User 2" width="64" height="64" />
              <div class="ml-3">
                <h5 class="mt-0 mb-1">Heraklitus Efridus</h5>
              </div>
            </div>
            <p>"Sebuah Sekolah Menengah Kejuruan yang sangat bagus. Suka!" <a href="https://g.co/kgs/T6AAJYF" target="_blank" style="text-decoration:none;">Baca selengkapnya</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="assets/img/Pengulas 1.3.jpg" class="rounded-circle" alt="User 3" width="64" height="64" />
              <div class="ml-3">
                <h5 class="mt-0 mb-1">Yohanes Suryadi</h5>
              </div>
            </div>
            <p>"Sekolah vokasi (SMK) pencetak SDM siap kerja untuk membangun NTT menjadi lebih maju." <a href="https://g.co/kgs/e5K1ZJe" target="_blank" style="text-decoration:none;">Baca selengkapnya</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="assets/img/Pengulas 1.4.jpg" class="rounded-circle" alt="User 1" width="64" height="64" />
              <div class="ml-3">
                <h5 class="mt-0 mb-1">Erick Kuwu</h5>
              </div>
            </div>
            <p>"Tempatnya sejuk tamannya luas banyak pohon Ada halaman depan untuk parkir kendaraan Bersih dan nyaman" <a href="https://g.co/kgs/db4Pc7R" target="_blank" style="text-decoration: none;">Baca selengkapnya</a></p>
          </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center mb-3">
            <img src="assets/img/Pengulas 1.5.jpg" class="rounded-circle" alt="User 2" width="64" height="64" />
            <div class="ml-3">
              <h5 class="mt-0 mb-1">Popind Davianus</h5>
            </div>
          </div>
          <p>"Sekolah kejuruan dengan kualitas terbaik di kota Ruteng." <a href="https://g.co/kgs/nGzcYaA" target="_blank" style="text-decoration: none;">Baca selengkapnya</a></p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center mb-3">
            <img src="assets/img/Pengulas 1.6.jpg" class="rounded-circle" alt="User 3" width="64" height="64" />
            <div class="ml-3">
              <h5 class="mt-0 mb-1">Mariano Cl.</h5>
            </div>
          </div>
          <p>"Mantap, kelasnya rapi dan bersih..<a href="https://g.co/kgs/Ak6rX1U" target="_blank" style="text-decoration: none;">Baca selengkapnya</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- Batas Testimonials/Ulasan-->

  <div class="container mt-5">
    <div class="form-container p-4 shadow-lg rounded">
        <h2 class="text-center mb-4">Formulir Kontak</h2>
        <form>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Tulis pesan Anda di sini..."></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary px-5">Kirim</button>
            </div>
        </form>
    </div>
</div>


  <!-- Bagian Footer-->
  <footer class="footer mt-5">
    <div class="container">
      <div class="row">
        <!-- Bagian Kiri: Alamat, Telepon, Email -->
        <div class="col-md-6">
          <h5>KONTAK KAMI</h5>
          <ul class="list-unstyled">
            <li><strong>Alamat:</strong> Jl. Raya Ruteng, Manggarai, NTT</li>
            <li><strong>Telepon:</strong> +62 385 123 456</li>
            <li><strong>Email:</strong> info@smksaloisiusruteng.sch.id</li>
          </ul>
        </div>

        <!-- Bagian Kanan: Media Sosial -->
        <div class="col-md-6 text-md-right">
          <h5>IKUTI KAMI</h5>
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="https://www.facebook.com/smkaloisiusruteng?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/smks_st_aloisius_ruteng?igsh=YmRjdXJoY25rcmc5" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
            </li>
            <li class="list-inline-item">
              <a href="http://www.youtube.com/@SMKSStAloisius" target="_blank"><i class="fab fa-youtube"></i> YouTube</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Batas Bagian Footer-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <body></body>
</html>
