<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'data_smk_ruteng';

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die("Koneksi Gagal: $mysqli->connect_error");
}