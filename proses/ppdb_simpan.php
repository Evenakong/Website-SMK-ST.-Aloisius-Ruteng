<?php

// Proses simpan data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jurusan = $_POST['jurusan'];
    $alasan = $_POST['alasan'];
    $gender = $_POST['gender'];

    // Cek apakah input file 'dokumen' ada
    if (isset($_FILES['dokumen'])) {
        if ($_FILES['dokumen']['error'] === UPLOAD_ERR_OK) {
            $targetDir = "assets/uploads/";
            $targetFile = $targetDir . basename($_FILES["dokumen"]["name"]);
            $uploadOk = 1;
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Cek apakah file sudah ada
            if (file_exists($targetFile)) {
                echo "File sudah ada.";
                $uploadOk = 0;
            }

            // Cek ukuran file
            if ($_FILES['dokumen']['size'] > 2 * 1024 * 1024) {
                echo "Maaf, ukuran file terlalu besar.";
                $uploadOk = 0;
            }

            // Cek tipe file
            $allowedTypes = ['pdf', 'jpg', 'jpeg', 'png'];
            if (!in_array($fileType, $allowedTypes)) {
                echo "Hanya file dengan tipe: " . implode(", ", $allowedTypes) . " yang diizinkan.";
                $uploadOk = 0;
            }

            // Upload file
            if ($uploadOk === 1) {
                if (move_uploaded_file($_FILES['dokumen']['tmp_name'], $targetFile)) {
                    echo "File " . htmlspecialchars(basename($_FILES["dokumen"]["name"])) . " berhasil diupload.";

                    // Menyimpan data ke database
                    $stmt = $mysqli->prepare("INSERT INTO pendaftaran (nama, email, password, tempat_lahir, tanggal_lahir, jurusan, alasan, gender, dokumen) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("sssssssss", $nama, $email, $password, $tempat_lahir, $tanggal_lahir, $jurusan, $alasan, $gender, $targetFile);

                    if ($stmt->execute()) {
                        echo "Data berhasil disimpan.";
                    } else {
                        echo "Terjadi kesalahan saat menyimpan data: " . $stmt->error;
                    }

                    $stmt->close();
                } else {
                    echo "Terjadi kesalahan saat mengupload file.";
                }
            }
        } else {
            echo "Terjadi kesalahan saat mengupload file: " . $_FILES['dokumen']['error'];
        }
    } else {
        echo "Input file 'dokumen' tidak ditemukan.";
    }
}
