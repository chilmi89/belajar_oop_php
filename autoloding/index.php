<?php

require_once 'App/init.php';

// Penggunaan
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetak = new CetakInfoProduk();
$cetak->tambah_Produk($produk1);
$cetak->tambah_Produk($produk2);

echo $cetak->cetak();
?>
