<?php

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
