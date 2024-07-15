<?php 

// Mendefinisikan kelas Produk
class Produk {
    // Properti dari kelas Produk
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

    // Konstruktor untuk menginisialisasi properti
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        // Menginisialisasi properti dengan nilai yang diberikan
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Fungsi untuk mendapatkan label penulis dan penerbit
    public function getLabel() {
        // Mengembalikan string yang berisi penulis dan penerbit
        return "$this->penulis, $this->penerbit";
    }

    // Fungsi untuk mendapatkan informasi produk
    public function getInfoProduk() {
        // Mengembalikan string yang berisi judul, label, dan harga produk
        return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }
}

// Mendefinisikan kelas Komik yang merupakan turunan dari kelas Produk
class Komik extends Produk {
    // Properti tambahan untuk kelas Komik
    public $jmlHalaman;

    // Konstruktor untuk menginisialisasi properti
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        // Memanggil konstruktor dari kelas induk (Produk)
        parent::__construct($judul, $penulis, $penerbit, $harga);
        // Menginisialisasi properti jmlHalaman dengan nilai yang diberikan
        $this->jmlHalaman = $jmlHalaman;
    }

    // Override fungsi getInfoProduk untuk menambahkan informasi jumlah halaman
    public function getInfoProduk() {
        // Mengembalikan string yang berisi informasi produk komik termasuk jumlah halaman
        return "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    }
}

// Mendefinisikan kelas Game yang merupakan turunan dari kelas Produk
class Game extends Produk {
    // Properti tambahan untuk kelas Game
    public $waktuMain;

    // Konstruktor untuk menginisialisasi properti
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        // Memanggil konstruktor dari kelas induk (Produk)
        parent::__construct($judul, $penulis, $penerbit, $harga);
        // Menginisialisasi properti waktuMain dengan nilai yang diberikan
        $this->waktuMain = $waktuMain;
    }

    // Override fungsi getInfoProduk untuk menambahkan informasi waktu main
    public function getInfoProduk() {
        // Mengembalikan string yang berisi informasi produk game termasuk waktu main
        return "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
    }
}

// Mendefinisikan kelas CetakInfoProduk
class CetakInfoProduk {
    // Fungsi untuk mencetak informasi produk
    public function cetak(Produk $produk) {
        // Mengembalikan string yang berisi judul, label, dan harga produk
        return "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    }
}

// Membuat objek dari kelas Komik
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// Membuat objek dari kelas Game
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// Menampilkan informasi produk komik
echo $produk1->getInfoProduk();
echo "<br>";
// Menampilkan informasi produk game
echo $produk2->getInfoProduk();