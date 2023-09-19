<?php
$angka_satu = 50;
$angka_dua = 10;
$angka_tiga = 77;

var_dump($angka_satu);
var_dump($angka_dua);
var_dump($angka_tiga);

// Penambahan
$tambah = $angka_satu + $angka_dua + $angka_tiga;

// Pengurangan
$kurang = $angka_satu - $angka_dua - $angka_tiga;

// perkalian
$perkalian = $angka_satu * $angka_dua * $angka_tiga;

// Pembagian
$pembagian = $angka_satu / $angka_dua / $angka_tiga;




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Penambahan</p>
    <p><?= $tambah ?></p>

    <p>Pengurangan</p>
    <p><?= $kurang ?></p>

    <p>perkalian</p>
    <p><?= $perkalian ?></p>

    <p>pembagian</p>
    <p><?= $pembagian ?></p>
</body>

</html>