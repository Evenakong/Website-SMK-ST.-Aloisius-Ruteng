<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Alumni</h1>
        <p class="text-center">Bagi alumni yang belum tercantum di daftar silahkan isi formulir alumni <a href="TracerAlumni.html" target="_blank" class="btn btn-primary">KLIK DISINI</a></p>

        <!-- Dropdown untuk menampilkan entri -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Tampilkan</span>
                    </div>
                    <select class="custom-select">
                        <option selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <div class="input-group-append">
                        <span class="input-group-text">entri</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Input pencarian -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Cari:</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Cari...">
                </div>
            </div>
        </div>

        <!-- Tabel alumni -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">Thn Lulus</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data alumni -->
                <tr>
                    <th scope="row">1</th>
                    <td>Abraham Leonardy Min</td>
                    <td>2016</td>
                    <td>2019</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Detail</button></td>
                </tr>
                <!-- Lebih banyak data alumni... -->
                <tr>
                    <th scope="row">10</th>
                    <td>Arifin Plasidus</td>
                    <td>2016</td>
                    <td>2019</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Detail</button></td>
                </tr>
            </tbody>
        </table>

        <!-- Navigasi halaman -->
        <nav aria-label="Contoh navigasi halaman">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Sebelumnya</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">9</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Berikutnya</a>
                </li>
            </ul>
        </nav>

        <p class="text-center mt-3">Menampilkan 1 sampai 10 dari 89 entri</p>
    </div>

    <!-- Sk rip Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>