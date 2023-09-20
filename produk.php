<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Data Produk</title>
</head>
<?php
$produk1 = 'Laptop';
$produk2 = 'Smartphone';
$produk3 = 'Tablet';

$harga1 = 2000000;
$harga2 = 13000000;
$harga3 = 3000000;

$diskon1= $harga1 * 0.1;
$diskon2= $harga2 * 0.1;
$diskon3= $harga3 * 0.1;

$afterDisc1= $harga1 - $diskon1;
$afterDisc2= $harga2 - $diskon2;
$afterDisc3= $harga3 - $diskon3;

$stok1 = 35;
$stok2 = 50;
$stok3 = 25;

$totalstok = $stok1 + $stok2 + $stok3;

$totalharga = $afterDisc1 + $afterDisc2 + $afterDisc3;

?>
<body>
    <table border="1" cellspacing= "0" cellpadding="5"  > 
        <tr style="background-color : lightgrey;"> 
            <th> Produk </th>
            <th> Harga </th>
            <th> Diskon(10%) </th>
            <th> Harga Setelah Diskon </th>
            <th> Stok </th>
        </tr>
        <tr>
            <td><?php echo $produk1; ?></td>
            <td><?php echo $harga1; ?></td>
            <td><?php echo $diskon1; ?></td>
            <td><?php echo $afterDisc1; ?></td>
            <td><?php echo $stok1; ?></td>
        </tr>

        <tr>
            <td><?php echo $produk2; ?></td>
            <td><?php echo $harga2; ?></td>
            <td><?php echo $diskon2; ?></td>
            <td><?php echo $afterDisc2; ?></td>
            <td><?php echo $stok2; ?></td>
        </tr>

        <tr>
            <td><?php echo $produk3; ?></td>
            <td><?php echo $harga3; ?></td>
            <td><?php echo $diskon3; ?></td>
            <td><?php echo $afterDisc3; ?></td>
            <td><?php echo $stok3; ?></td>
        </tr>

        <tr>
            <td  colspan="4">Total Stok</td>
            <td><?php echo $totalstok; ?></td>
        </tr>

        <tr>
            <td colspan="3">Total Harga</td>
            <td colspan="2"><?php echo $totalharga; ?></td>
        </tr>
    </table>
</body>
</html>