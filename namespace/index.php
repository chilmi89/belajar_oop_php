<?php
// menerima parameter dari init.php dengan namespace
require_once 'App/init.php';
// require_once 'App/Service/User.php';
// require_once 'App/Produk/User.php';


// Penggunaan
// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// $cetak = new CetakInfoProduk();
// $cetak->tambah_Produk($produk1);
// $cetak->tambah_Produk($produk2);

// new Service\User();

// inisialiasasi class dengan namespace
new App\Produk\User();
// new App\Produk\User();
// echo $cetak->cetak();

?>


