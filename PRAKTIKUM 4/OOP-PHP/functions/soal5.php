<!-- https://www.duniailkom.com/tutorial-belajar-oop-php-cara-penggunaan-pseudo-variable-this-dalam-objek-php/ -->
<!-- e. Penggunaan Pseudo-Variable $this dalam Objek -->
<?php
class Produk
{
    public $judul,
        $penerbit,
        $pengarang,
        $tahunTerbit;

    public function setData($judul = "null", $pengarang = "Anonim", $penerbit = "Anonim", $tahunTerbit = "1999")
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->pengarang = $pengarang;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function getData()
    {
        return "Judul : {$this->judul} , Pengarang: {$this->pengarang}, Penerbit:  {$this->penerbit}, Tahun Terbit : {$this->tahunTerbit}";
    }
}

$produk1 = new Produk();
$produk1->setData("Tutorial flutter", "Budi Raharjo", "Informatika", "12 Mei 2018");
echo "Produk 1 = " . $produk1->getData();

?>