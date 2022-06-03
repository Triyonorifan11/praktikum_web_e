<!-- g. Implementasi Constructor dan Destructor -->
<!-- https://www.duniailkom.com/tutorial-belajar-oop-php-pengertian-constructor-dan-destructor/ -->

<?php
// Membuat Class
class Produk
{
    // property
    public $judul,
        $penerbit,
        $pengarang,
        $tahunTerbit;


    // constructor
    public function __construct($judul = "null", $pengarang = "Anonim", $penerbit = "Anonim", $tahunTerbit = "1999")
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->pengarang = $pengarang;
        $this->tahunTerbit = $tahunTerbit;
    }

    // method
    public function getData()
    {
        return "Judul : {$this->judul} , Pengarang: {$this->pengarang}, Penerbit:  {$this->penerbit}, Tahun Terbit : {$this->tahunTerbit}";
    }

    // destructor
    public function __destruct()
    {
        echo "<br><br>this destructor <br>";
        echo "Judul : {$this->judul} , Pengarang: {$this->pengarang}, Penerbit:  {$this->penerbit}, Tahun Terbit : {$this->tahunTerbit}";
    }
}

// membuat objek dari Class
$produk1 = new Produk("Tutorial flutter", "Budi Raharjo", "Informatika", "12 Mei 2018");
echo "Dengan Constructor <br>";
echo "Produk 1 = " . $produk1->getData();

$produk2 = new Produk("Pemrograman Web", "Syarif Hidayat", "Informatika", "2019");
echo "<br><br>";
echo "Produk 2 = " . $produk2->getData();

?>