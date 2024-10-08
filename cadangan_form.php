<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Pendaftaran</title>
  <!-- Bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

  <div class="container">
    <div class="col-md-8 mx-auto form-container">
      <h2 class="form-title">Formulir Pendaftaran Peserta Didik Baru</h2>
      <form>
        <div class="form-group mb-3">
          <label>Nama Lengkap</label>
          <input type="text" class="form-control" placeholder="Masukan Nama Lengkap Anda">
        </div>

        <div class="form-group mb-3">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Masukan Email Anda">
        </div>

        <div class="form-group mb-3">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Masukan Password Anda">
          <small class="text-muted">Password terdiri dari angka dan huruf minimal 6 karakter</small>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group mb-3">
              <label>Tempat Lahir</label>
              <input type="text" class="form-control" placeholder="Masukan Tempat Lahir Anda">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mb-3">
              <label>Tanggal Lahir</label>
              <input type="date" class="form-control">
            </div>
          </div>
        </div>

        <div class="form-group mb-3">
          <label>Pilih Jurusan</label>
          <select class="form-control">
            <option>Teknik Otomotif</option>
            <option>Teknik Pengelasan</option>
            <option>Desain Komunikasi Visual</option>
          </select>
        </div>

        <div class="form-group mb-3">
          <label>Alasan Memilih Sekolah Ini</label>
          <textarea class="form-control" rows="4" placeholder="Tuliskan alasan Anda"></textarea>
        </div>

        <div class="form-group mb-3">
          <label>Jenis Kelamin</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="male" value="Laki-laki">
            <label class="form-check-label" for="male">Laki-laki</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="female" value="Perempuan">
            <label class="form-check-label" for="female">Perempuan</label>
          </div>
        </div>

        <div class="form-group mb-3">
          <label>Upload Dokumen</label>
          <input type="file" class="form-control">
          <small class="text-muted">Upload file dengan ukuran minimal 2 MB</small>
        </div>

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-primary">SIMPAN</button>
          <button type="reset" class="btn btn-danger">RESET</button>
        </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>