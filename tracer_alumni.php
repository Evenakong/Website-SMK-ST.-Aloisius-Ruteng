<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Alumni - SMK ST. Aloisius Ruteng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            margin-bottom: 30px;
            text-align: center;
            text-align: #333;
            color: #007bff;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="form-container">
            <h2 class="form-title">Form Tracer Alumni</h2>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" required>
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
                <div class="mb-3">
                    <label for="name" class="form-label">Kota/Kabupaten</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukan Kota/Kab" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">No. Telepon</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukan Nomor Telp. Anda" required>
                </div>
                <div class="form-group mb-3">
                    <label>Jurusan</label>
                    <select class="form-control">
                        <option>Teknik Otomotif</option>
                        <option>Teknik Pengelasan</option>
                        <option>Desain Komunikasi Visual</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label">Tahun Kelulusan</label>
                    <input type="number" class="form-control" id="year" placeholder="Tahun Kelulusan" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status Setelah Lulus</label>
                    <select class="form-select" id="status" required>
                        <option value="" disabled selected>Pilih Status...</option>
                        <option value="bekerja">Bekerja</option>
                        <option value="wirausaha">Wirausaha</option>
                        <option value="kuliah">Melanjutkan Pendidikan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Melanjutkan Pendidikan</label>
                    <input type="text" class="form-control" id="position" placeholder="Melanjutkan Pendidikan Ke">
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Jenjang</label>
                    <input type="text" class="form-control" id="position" placeholder="Jenjang">
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Program Studi</label>
                    <input type="text" class="form-control" id="position" placeholder="Program Studi Lanjutan Anda">
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label">Nama Perusahaan/Instansi (Jika Bekerja)</label>
                    <input type="text" class="form-control" id="company"
                        placeholder="Masukkan Nama Perusahaan atau Instansi">
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="position" placeholder="Masukkan Jabatan Anda">
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Lokasi Kerja</label>
                    <input type="text" class="form-control" id="location" placeholder="Masukkan Lokasi Kerja">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan untuk Sekolah (Opsional)</label>
                    <textarea class="form-control" id="message" rows="3"
                        placeholder="Tuliskan pesan atau kesan Anda di sini"></textarea>
                </div>
                <form>
                    <!-- Form input fields -->

                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="index.php" class="btn btn-primary">Kembali</a>
                </form>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>