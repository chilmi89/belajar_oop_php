<?php

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
