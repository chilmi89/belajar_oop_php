<?php 

class Produk {
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
    public function getInfoProduk() {
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

    public function getInfoProduk() {
        return "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
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

    public function getInfoProduk() {
        return "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
    }


}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        return "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->getHarga()})";
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);



echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

// untuk mengubah diskon dari produk game
$produk2->setDiskon(50);
echo "<br>";
echo "harga game setelah diskon : " . $produk2->getHarga();
echo "<hr>";
$produk1->setDiskon(30);
echo "<br>";
echo "harga komik setelah diskon : " . $produk1->getHarga();


echo "<hr>";
echo "konfigurasi judul ";
echo "<br>";
// untuk mengganti judul dari properti produk yang private
echo $produk1->setJudul("hinata");
echo "<hr>";
// untuk akses judul dari properti produk yang private
echo $produk1->getJudul();
echo "<hr>";
