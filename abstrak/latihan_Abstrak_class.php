<?php 

abstract class Produk {
    private $judul, 
           $penulis,
           $penerbit,
           $diskon = 0;
    private $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // setter
    public function setJudul( $judul) {
        if (!is_string($judul)) {
            throw new Exception("Judul harus string");
        }
         $this->judul = $judul;
    }

    // getter   
    public function getJudul() {
        return $this->judul;
    }
    // setter
    public function setPenulis($penulis) {
        if (!is_string($penulis)) {
            throw new Exception("Penulis harus string");
        }
        $this->penulis = $penulis;
    }
    // getter
    public function getPenulis() {
        return $this->penulis;
    }

    public function getHarga() {
        return $this->harga;
    }
    // abstract method
    abstract public function getInfoProduk();

    // abstract method yang menjadi method cetak info produk
    public function infoproduk() {
        return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }
    public function getDiskon() {
        return $this->diskon;
    }
    
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    // getter dari parent produk
    public function getHarga() {
        return parent::getHarga() - (parent::getHarga() * $this->getDiskon() / 100);
    }
    // abstrak class di override pada parent class 
    public function getInfoProduk() {
        return "Komik : " . parent::infoproduk() . " - {$this->jmlHalaman} Halaman.";
    }
    
}

class Game extends Produk {
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    // getter dari parent produk
    public function getHarga() {
        return parent::getHarga() - (parent::getHarga() * $this->getDiskon() / 100);
    }

    // karena abstract method yang berada di parent produk itu harus di override
    public function getInfoProduk() {
        return "Game : " . parent::infoproduk() . " ~ {$this->waktuMain} Jam.";
    }


}

class CetakInfoProduk {
    public $daftar_produk = [];

    public function tambah_Produk(Produk $produk) {
        $this->daftar_produk[] = $produk;
    }
    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftar_produk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);


$cetak = new CetakInfoProduk();
$cetak->tambah_Produk($produk1);
$cetak->tambah_Produk($produk2);

echo $cetak->cetak();


