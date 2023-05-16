<?php

class Nyoba {

}

$a = new Nyoba();

class Mobil {
    public $nama,
            $merk,
            $warna;



    public function tambahKecepatan(){

    }

    public function kurangiKesepatan(){

    }
}

// $bmw = new Mobil();

class Produk {
    public $nama = 'Ini Nama',
            $jenis = 'Ini Jenis',
            $harga = 999;

    public function __construct($nama, $jenis, $harga){
    $this->nama = $nama;
    $this->jenis = $jenis;
    $this->harga = $harga;       
}

    
    public function printHarga(){
        return $this->harga;
    }
}

// $produk1 = new Produk();
// $produk1 -> nama = 'kursi';
// $produk1 -> jenis = 'barang';

// var_dump ($produk1);

$produk2 = new Produk("Baju PP", "Kaos", 15000);
// $produk2->tambahProperti = 'Contoh';

// var_dump($produk2);
// var_dump ($produk2);
echo "Produk 2 : $produk2->nama, $produk2->jenis";
echo "<br>";
echo "Harga : " . $produk2->printHarga();





?>