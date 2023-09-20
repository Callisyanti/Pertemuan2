<!DOCTYPE html>
<html>
<head>
    <title>Bangun Datar Kelompok</title>
    <style>
        body {
            text-align: center;
        }
        .container {
            display: inline-block;
            text-align: center;
            margin: 20px;
            border: 1px solid #ccc;
            padding: 10px;
        }
        .shape {
            display: inline-block;
            margin-right: 20px;
        }

        .garis {
            width: 100px;
            height: 2px;
            background-color: black;
        }

        .persegi-panjang {
            width: 150px;
            height: 100px;
            background-color: blue;
        }

        .segitiga {
            width: 0;
            height: 0;
            border-left: 50px solid transparent;
            border-right: 50px solid transparent;
            border-bottom: 87px solid green;
        }
    </style>
</head>
<body>
    <?php
    $garisPanjang = 4;

    $persegiPanjangPanjang = 2;
    $persegiPanjangLebar = 1.5;

    $segitigaSisi = 50;
    ?>

    <div class="container">
    <h1>Gambar Garis Lurus</h1>
    <div class="shape garis" style="width: <?= $garisPanjang ?>cm;"></div>
    Panjang: <?= $garisPanjang ?>cm<br>
    </div>

    <div class="container">
    <h1>Gambar Persegi Panjang</h1>
    <div class="shape persegi-panjang" style="width: <?= $persegiPanjangPanjang ?>cm; height: <?= $persegiPanjangLebar ?>cm;"></div>
    Panjang: <?= $persegiPanjangPanjang ?>cm<br>
    Lebar: <?= $persegiPanjangLebar ?>cm<br>
    </div>

    <div class="container">
    <h1>Gambar Segitiga Sama Sisi</h1>
    <div class="shape segitiga" style="border-left-width: <?= $segitigaSisi / 2 ?>px; border-right-width: <?= $segitigaSisi / 2 ?>px; border-bottom-width: <?= sqrt(3) / 2 * $segitigaSisi ?>px;"></div>
    Sisi: <?= $segitigaSisi ?>cm<br>
    </div>
    </div>
</body>
</html>
