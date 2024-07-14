<?php

class Produk_1
{
    // properti
    public $nama,
        $harga,
        $merk;

    // fungsi yang otomatis dijalankan saat class di panggil 
    // fungsi ini bernama __construct()
    // menerima parameter yang dikirim dari objek
    public function __construct($nama, $harga, $merk)
    {   
        // mengisi properti dengan parameter yang dikirim dari objek
        // $this digunakan untuk mengakses properti dari class
        $this->nama = $nama;
        $this->harga = $harga;
        $this->merk = $merk;
    }

    public function cekNama()
    {
        // menggunakan this untuk mencetak properti dari class
        // dengan mengembalikan nilai dari fungsi cekNama() dengan return
        return "nama produk: " . $this->nama.
            "<br>" . "harga: " . $this->harga.
            "<br>" . "merk: " .  $this->merk;
    }
}

// membuat objek yang memanggil class dengan memasukan parameter yg terdapat dalam class
// parameter yang dimasukan ke class sebagai variabel
// variabel yang ditangkap akan masuk kedalam fungsion construct
$produksi2 = new Produk_1("lenovo ideaped gaming 2 ", 120000, "lenovo");
$produksi1 = new Produk_1("Asus Tuf Gaming ", 12000, "Asus");

echo $produksi1->cekNama();
echo "<br>";
echo "<br>";
echo $produksi2->cekNama();
