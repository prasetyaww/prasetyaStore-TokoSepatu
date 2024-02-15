<?php

$produk = [
    [
        "no" => "1",
        "nama" => "Sepatu Nike Black Edition 115",
        "harga" => 5000000,
        "foto" => "gambar1.jpeg",
        "stok" => 50,
        "status" => "Tersedia"
    ],
    [
        "no" => "2",
        "nama" => "Sepatu Adidas White Edition 225",
        "harga" => 6000000,
        "foto" => "gambar1.jpeg",
        "stok" => 0,
        "status" => "Tidak Tersedia"
    ]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Prasetya Store | Toko Sepatu Murah dan Terpercaya</h1>
    <h3>Data Produk</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Stok</th>
            <th>Status</th>
        </tr>
        <tr>
        <?php foreach($produk as $a) : ?>
            <td><?= $a["no"]; ?></td>
            <td><?= $a["nama"]; ?></td>
            <td> Rp. <?= number_format($a["harga"]) ?></td>
            <td><img src="<?= $a["foto"]; ?>" alt=""></td>
            <td><?= $a["stok"]; ?></td>
            <?php if($a["status"] == "Tersedia") { ?>
                <td style = 'color : green'><?= $a["status"] ?></td>
            <?php } else { ?>
                <td style = 'color : red'><?= $a["status"] ?></td>
            <?php } ?>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
