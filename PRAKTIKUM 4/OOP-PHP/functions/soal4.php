<!-- d. Implementasi Variabel $this dalam Pemrograman Objek -->
<!-- https://www.duniailkom.com/tutorial-belajar-oop-php-pengertian-dan-fungsi-variabel-this-dalam-pemrograman-objek/ -->

<!-- tanpa this -->

<?php
class Buku
{
    public $pemilik = "Riyo";

    public function getData()
    {
        return "Buku ini milik $pemilik";
    }
}

$buku_flutter = new Buku();

echo "buku ini milik $buku_flutter->Pemilik";

echo $buku_flutter->getData();

?>

<!-- dengan this -->
<?php
class Buku_PemWeb
{
    public $pemilik = "Riyo";

    public function getData()
    {
        return "Buku ini milik {$this->pemilik}";
    }
}

$buku_flutter = new Buku_PemWeb();
echo "<br><br><br>";
echo $buku_flutter->getData();

?>