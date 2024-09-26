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
    <h2 class="text-center mb-3">Tentang Sekolah</h2>
    <h5 class="text-center mb-3">Sejarah Tulisan ini akan diterbitkan dalam beberapa bagian.</h5>
    <h6 class="text-center mb-3">Bagian Pertama Mei 2015</h6>
    <p class="text-justify">
    Kehadiran Lembaga Pendidikan SMK Santo Aloius tidak terlepas dari sejarah berkembangnya karya para Bruder CSA di Komunitas Ruteng. Para Bruder CSA (Santo Aloisius) mulai berkarya di Manggarai pada tahun 1958 atas undangan Mgr. Van Bekum, SVD. Karya yang ditangani para bruder yakni SGB lalu dalam perjalanan waktu berubah menjadi SGA dan yang terakhir  SPG. Pada tahun 1991 SPG ditutup secara nasional oleh pemerintah. 
    </p>
    <p class="text-justify">
    Desakan dari berbagai pihak setelah SPG tutup para bruder diminta untuk membuka SMA atau SMP Plus, mengingat para bruder terkenal dengan kemampuan untuk mendidik  kaum muda. Yayasan berpikiran lain lain.
    </p>
    <p class="text-justify">
    Pada tahun 1992 Bruder Thomas Voets selaku ketua yayasan mengajak dialog dengan Uskup dan Pemda untuk mendiskusikan karya yang tepat untuk para bruder itu apa. Setelah melalui proses yang panjang akhirnya menentukan karya Pnedidikan non formal untuk pendidikan kaum muda yang disebut PUSLAT PSE. Saat itu banyak anak muda banyak yang drop out dari sekolah, tidak mampu melanjutkan pendidikan ke jenjang yang lebih tinggi. Selain itu untuk pembinaan rohani umat Manggarai maka sebagian lahan di kompleks tubi dijadikan rumah pembinaan iman yang disebut PUSAT SPIRITUALITAS EFATA.  Semuanya itu mulai dibangun tahun 1992 sampai dengan 1994.
    </p>
    <p class="text-justify">
    Peserta kursus yang yang dibina di PUSLAT PSE berasal dari berbagai kabupaten di NTT misalnya dari Sumba, Larantuka, Ngada, Maumere dan tentu saja dari Manggarai. Mereka di PUSLAT PSE dilatih bagaimana cara bertani, menjadi tukang kayu dan berbagai ketrampilan. Setelah tamat dari PUSLAT PSE mereka ad yang mandiri untuk bekerja, selain itu juga bekerja di tempat orang lain sesuai bidangnya lalu setelah mengumpulkan sejumlah modal kemudian berwiraswasta. PUSLAT PSE sudah berusia 22 tahun. Sudah ratusan kaum muda yang di didik dan dilatih. Dalam perkembangan jaman dunia pendidikan semakin maju. Pemerintah mendirikan SMP dan SMA sampai tingkat kecamatan. Maka anak-anak yang drop out semakin berkurang.
    </p>
    <p class="text-justify d-none" id="more-content">
    Awal tahun 2015 sewaktu kunjungan DU di Ruteng mengajak para bruder dan Yayasan untuk membaca tanda-tanda jaman bahwa pendidikan formal setingkat SMA sudah masuk disetiap kecamatan, maka pertanyaan setelah peserta kursus semakin sedikit lalu CSA mau berbuat apa?.  Pihak Yayasan yang dimotori oleh Br. Suryadi dan Br. Viktor diminta untuk menjajagi SMK  supaya didialogkan dengan pihak pemerintah kabupaten dan Uskup.
    </p>
    <p class="text-justify d-none" id="more-content">
    Setelah mendapat tugas dari Pimpinan Umum selanjutnya adalah melakukan konsultasi dengan pihak pemerintah dalam hal ini Dinas Pendidikan Pemuda dan Olah raga Kabupaten Manggarai dan Keuskupan Ruteng. Dari Dinas PPO memberi petunjuk bahwa untuk mendirikan sebuah lembaga pendidikan khsususnya Lembaga Pendidikan Swasta harus memenuhi 2 syarat utama yaitu pertama harus memiliki Ijin Operasional dan kedua memiliki ijin Kelembagaan. Ijin operasinal agar sekolah dapat dimulai proses belajar mengajar, sedangkan ijin kelembagaan bahwa sekolah itu diakui oleh pemerintah dan berhak mendapat bantuan dari pemerintah. Ijin Kelembagaan dapat diterbitkan setelah sekolah berjalan minimal 1 bulan dan paling lama dua tahun. Selama itu pemerintah melakukan evaluasi.
    </p>
    <!-- Konten tersembunyi (Akan muncul ketika tombol "Selengkapnya" diklik) -->
    <p class="text-justify d-none" id="more-content">
    Untuk memperoleh ijin operasional pihak Yayasan harus mengajukan proposal pendirian sekolah yang memuat tentang: Tujuan Visi Misi sekolah, ketersediaan lokasi/gedung, tenaga pendidik dan kependidikan, sekolah pendukung serta sumber dana.
    </p>
    <p class="text-justify d-none" id="more-content">
    Setelah mendapat tugas dari Pimpinan Umum selanjutnya adalah melakukan konsultasi dengan pihak pemerintah dalam hal ini Dinas Pendidikan Pemuda dan Olah raga Kabupaten Manggarai dan Keuskupan Ruteng. Dari Dinas PPO memberi petunjuk bahwa untuk mendirikan sebuah lembaga pendidikan khsususnya Lembaga Pendidikan Swasta harus memenuhi 2 syarat utama yaitu pertama harus memiliki Ijin Operasional dan kedua memiliki ijin Kelembagaan. Ijin operasinal agar sekolah dapat dimulai proses belajar mengajar, sedangkan ijin kelembagaan bahwa sekolah itu diakui oleh pemerintah dan berhak mendapat bantuan dari pemerintah. Ijin Kelembagaan dapat diterbitkan setelah sekolah berjalan minimal 1 bulan dan paling lama dua tahun. Selama itu pemerintah melakukan evaluasi.
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
