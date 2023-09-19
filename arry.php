<?php 

// Cara lama 
$a = array('Jayapura','Bandung','Wamena','Biak');

// cara baru
$b = ['Jayapura','Bandung','Wamena','Biak'];

// echo ($b[3]);

echo "<br>";

foreach($a as $y)
{
    echo $y ."<br>";
}


// Array Associatice
$c = [ "Billy" => "Biak",
        "Calvin" => "Wamena",
        "Samuel" => "Sorong"
];

// var_dump($c);
echo  "<br>";
echo $c['Billy'] . "<br>";
echo $c['Calvin'] . "<br>";
echo $c['Samuel'] . "<br>";

// Array dua demensin

$data_kendaraan = [
    [
        "nama_kendaraan"  => "motor metik",
        "tahun_beli"      => "2022",
        "harga"           => "20.000.000"
    ],
    [
        "nama_kendaraan"  => "mobil avanza",
        "tahun_beli"      => "2018",
        "harga"           => "100.000.000"
    ],
    [
        "nama_kendaraan"  => "motor ",
        "tahun_beli"      => "2022",
        "harga"           => "20.000.000"
    ],
    [
        "nama_kendaraan"  => "mobil ",
        "tahun_beli"      => "2018",
        "harga"           => "100.000.000"
    ],
];

// echo ($data_kendaraan[1]['nama_kendaraan']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Kendaraan</th>
            <th>Tahun Beli</th>
            <th>Harga</th>
        </tr>
        <?php $no = 0; foreach($data_kendaraan as $dk) : ?>
        <tr>
            <td> <?= ++$no ?>.</td>
            <td><?= $dk['nama_kendaraan']?></td>
            <td><?= $dk['tahun_beli']?></td>
            <td><?= $dk['harga']?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>

</html>