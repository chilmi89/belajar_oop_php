<?php
// Menjelaskan fungsi dari keyword static
// Keyword static digunakan untuk mendefinisikan properti atau method yang dapat diakses tanpa perlu menginstansiasi objek dari kelas tersebut.
// Properti atau method yang didefinisikan sebagai static akan tetap memiliki nilainya yang sama di setiap instansiasi objek dan dapat diakses menggunakan sintaks '::'.


// Mendefinisikan kelas coba_Static
class coba_Static{

    // Mendefinisikan properti angka sebagai static
    public static $angka = 1;

    // Fungsi untuk mencetak pesan "halo" beserta nilai angka
    public function halo(){
        echo "halo " . self::$angka++ . " kali "."<br>";
    }

}

// Memanggil properti angka dari kelas coba_Static
echo coba_Static::$angka;
echo "<hr>";

// Membuat objek coba1 dari kelas coba_Static
$coba1 = new coba_Static();
$coba1->halo();
$coba1->halo();
$coba1->halo();
$coba1->halo();

echo "<hr>";

// Membuat objek coba2 dari kelas coba_Static
$coba2 = new coba_Static();
$coba2->halo();
$coba2->halo();
$coba2->halo();
$coba2->halo();

?>