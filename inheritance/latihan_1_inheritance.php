<?php

class Produk_3
{
    // properti
    public $nama,
        $harga,
        $merk,
        $type,
        $prosesor,
        $memory,
        $kelas;

    // fungsi yang otomatis dijalankan saat class di panggil 
    // fungsi ini bernama __construct()
    // menerima parameter yang dikirim dari objek
    public function __construct($nama, $harga, $merk , $type, $prosesor , $memory, $kelas)
    {   
        // mengisi properti dengan parameter yang dikirim dari objek
        // $this digunakan untuk mengakses properti dari class
        $this->nama = $nama;
        $this->harga = $harga;
        $this->merk = $merk;
        $this->type = $type;
        $this->prosesor = $prosesor;
        $this->memory = $memory;
        $this->kelas = $kelas;

    }

    public function cekNama()
    {
        // menggunakan this untuk mencetak properti dari class
        // dengan mengembalikan nilai dari fungsi cekNama() dengan return
        return "nama produk: " . $this->nama.
            "<br>" . "merk: " .  $this->merk.
            "<br>"."harga". ":". $this->harga.
            "<br>"."prosesor". ":". $this->prosesor.
            "<br>"."type". ":". $this->type.
            "<br>"."memory". ":". $this->memory.
            "<br>"."kelas". ": ". $this->kelas; // Perbaikan: tambahkan spasi setelah ":"

    }

    // Fungsi Get_info_lengkap() digunakan untuk mendapatkan informasi lengkap dari produk
    // Fungsi ini menggabungkan hasil dari fungsi cekNama() dengan tambahan informasi kelas produk
    public function Get_info_lengkap(){
        // Memanggil fungsi cekNama() untuk mendapatkan informasi dasar produk
        $info = "{$this->cekNama()}";
        // Menambahkan informasi kelas produk berdasarkan nilai properti kelas
        if($this->kelas == "low"){
            $info .= "<br>"."kelas". ": low range"; // Jika kelas adalah "low", tambahkan "low range"
        }else if($this->kelas=="mid"){
            $info .= "<br>"."kelas". ": mid range"; // Jika kelas adalah "mid", tambahkan "mid range"
        }
        // Mengembalikan informasi lengkap produk
        return $info;
    }
}

$produksi2 = new Produk_3("Lenovo Ideapad Slim 2", 120000, "Lenovo", "Harian", "i5", 8, "low");
$produksi1 = new Produk_3("Asus TUF Gaming", 12000, "Asus", "Gaming", "i7", 16, "mid");

echo $produksi1->Get_info_lengkap();
echo "<br>";
echo "<br>";
echo $produksi2->Get_info_lengkap(); 