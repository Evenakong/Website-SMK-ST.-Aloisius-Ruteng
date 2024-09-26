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
                <li><a class="dropdown-item" href="#visi-misi">Visi & Misi</a></li>
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
    <h2 class="text-justify mb-3">Visi:</h2>
    <p class="text-justify">
    Komunitas Pendidikan yang cerdas dan unggul dalam sikap, pengetahuan, ketrampilan
    <br>serta berwawasan lingkungan yang dilandasi Persaudaraan Kasih dan Damai</br>
    </p>
    <h2 class="text-Justify mb-3">Misi:</h2>
    <p class="text-justify">
    A. Mengembangkan kecerdasan  spiritual, intelektual, emosional, watak dan moral bangsa.
    <br>B. Mengembangkan kepribadian unggul : memiliki karakter  jujur, mandiri, disiplin, tanggung jawab,  rela berkorban menghargai, dan berintegritas.</br>
    C. Mengembangkan potensi dan ketrampilan peserta didik dengan melibatkan dunia industri, dunia usaha dan dunia kerja: (kreatif, inovatif,  kompetitif dan memiliki jiwa kewirausahaan)
    <br>D. Mengembangkan sikap Persaudaraan Kasih dan Damai  serta berwawasan lingkungan. serta berwawasan lingkungan yang dilandasi Persaudaraan Kasih dan Damai</br>
    </p>
    <h2 class="text-Justify mb-3">Tujuan:</h2>
    <p class="text-justify">
    1. Mengembangkan potensi peserta didik agar menjadi warga negara yang berakhlak mulia, sehat, berilmu, cakap, kreatif mandiri, demokratis dan bertanggung jawab. 
    <br>2. Mengembangkan potensi peserta didik agar memiliki wawasan kebangsaan, memahami dan menghargai keberanekaragaman budaya bangsa indonesia. <br/>
    3. Mengembangkan potensi peserta didik agar memiliki kepedulian terhadap lingkungan hidup dengan secara aktif turut serta memelihara dan melestarikan lingkungan hidup serta memanfaatkan sumber daya alam dengan efektif dan efisien.
    <br>4. Mempersiapkan peserta didik agar menjadi manusia produktif, mampu bekerja mandiri dan dapat diserap IDUKA sesuai dengan kompetensi yang dimilikinya. </br>
    5. Membekali peserta didik dengan ilmu pengetahuan, teknologi, seni dan wawasan enterprenur agar mampu mengembangkan diri baik secara mandiri maupun melalui jenjang pendidikan yang lebih tinggi.
    </p>
  <!-- Formulir Kontak -->
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
 <!-- Batas Formulir Kontak -->


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
