<?php

interface InfoProduk {
    public function getInfoProduk();
}

abstract class Produk {
    protected $judul,
           $penulis,
           $penerbit,
           $diskon = 0;
    protected $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // Setter
    public function setJudul($judul) {
        if (!is_string($judul)) {
            throw new Exception("Judul harus string");
        }
        $this->judul = $judul;
    }

    // Getter
    public function getJudul() {
        return $this->judul;
    }

    // Setter
    public function setPenulis($penulis) {
        if (!is_string($penulis)) {
            throw new Exception("Penulis harus string");
        }
        $this->penulis = $penulis;
    }

    // Getter
    public function getPenulis() {
        return $this->penulis;
    }

    public function getHarga() {
        return $this->harga;
    }

    // Abstract method
    abstract public function getInfoProduk();

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }
}

class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    // Override method getInfoProduk()
    public function getInfoProduk() {
        return "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
    }

    // Method untuk mengambil informasi umum produk
    protected function getInfo() {
        return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }
}

class Game extends Produk implements InfoProduk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    // Override method getInfoProduk()
    public function getInfoProduk() {
        return "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
    }

    // Method ini digunakan untuk mendapatkan informasi umum produk
    protected function getInfo() {
        return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }
}

// Kelas CetakInfoProduk digunakan untuk mencetak informasi produk-produk yang telah ditambahkan ke dalam daftar produk.
class CetakInfoProduk {
    // Properti daftar_produk digunakan untuk menyimpan daftar produk yang akan dicetak.
    public $daftar_produk = [];

    // Method tambah_Produk digunakan untuk menambahkan produk ke dalam daftar produk.
    public function tambah_Produk(Produk $produk) {
        $this->daftar_produk[] = $produk;
    }

    // Method cetak digunakan untuk mencetak informasi produk yang ada dalam daftar produk.
    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftar_produk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

// Penggunaan
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetak = new CetakInfoProduk();
$cetak->tambah_Produk($produk1);
$cetak->tambah_Produk($produk2);

echo $cetak->cetak();
?>
