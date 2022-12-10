<?php

$nama = "Gede Darma Yuda";
$usia = "23";
$alamat = "Blitar";

$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/nama':
        echo ("Nama saya adalah: " . $nama);
        break;
    case '/usia':
        echo ("Usia saya adalah: " . $usia);
        break;
    case '/alamat':
        echo ("Alamat saya adalah: " . $alamat);
        break;
    case '/profil':
        echo ("Nama saya adalah: " . $nama . " dan usia saya adalah " . $usia . " dengan alamat " . $alamat);
        break;
    case '/':
        echo ("Kosong");
        break;
    default:
        echo ("Anda belum mengisi");
        break;
}
?>