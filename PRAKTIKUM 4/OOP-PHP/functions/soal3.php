<!-- c. Implementasi Enkapsulasi Objek (Public, Protected dan Private) -->
<!-- https://www.duniailkom.com/tutorial-belajar-oop-php-pengertian-enkapsulasi-objek-public-protected-dan-private/ -->

<?php

class Buku
{
    public $judul, $penulis;

    public function setData($judul = "null", $penulis = "Anonim")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function getData()
    {
        return "Judul = {$this->judul} , Penulis = {$this->penulis}";
    }
}

$buku1 = new Buku();
$buku1->setData("Pemrograman Flutter", "Budi Raharjo");

echo "<b>Public:</b>";
echo "<br>";
echo $buku1->getData();
echo "<br><br>";
?>

<!-- protected -->
<?php
class Handphone
{
    protected $Pemilik = "Riyo";

    public function getPemilik()
    {
        return $this->Pemilik;
    }

    protected function getPIN()
    {
        return "PIN = 123211";
    }

    public function aksesPin()
    {
        return $this->getPIN();
    }
}

$hp1 = new Handphone();

echo $hp1->getPemilik();
echo "<br>";
echo $hp1->aksesPin();
echo "<br><br>";
?>


<!-- private -->
<?php
// buat class komputer
class komputer
{

    // property dengan hak akses protected
    private $jenis_processor = "Intel Core i7-4790 3.6Ghz";

    public function tampilkan_processor()
    {
        return $this->jenis_processor;
    }
}

// buat class laptop
class laptop extends komputer
{

    public function tampilkan_processor()
    {
        return $this->jenis_processor;
    }
}

// buat objek dari class laptop (instansiasi)
$komputer_baru = new komputer();
$laptop_baru = new laptop();

// jalankan method dari class komputer
echo $komputer_baru->tampilkan_processor(); // "Intel Core i7-4790 3.6Ghz"

// jalankan method dari class laptop (error)
echo $laptop_baru->tampilkan_processor();
// Notice: Undefined property: laptop::$jenis_processor
?>