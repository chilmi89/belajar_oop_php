<?php

// Mendefinisikan kelas belajar_Const
class belajar_Const{
   // Mendefinisikan properti files dengan nilai __FILE__
   public $files = __FILE__;

    // Mendefinisikan konstanta angka dengan nilai 10
    const angka = 10;
}

// Membuat objek baru dari kelas belajar_Const
$objek = new belajar_Const();

// Menampilkan nilai konstanta angka menggunakan sintaks '::'
echo $objek::angka;

// Menampilkan nilai properti files
echo "<hr>";
echo $objek->files;
echo "<br>";

?>
