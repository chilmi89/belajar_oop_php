<?php

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