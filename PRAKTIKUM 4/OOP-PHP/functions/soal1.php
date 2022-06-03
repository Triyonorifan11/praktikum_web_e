<!-- a. Implementasi pembuatan dan pengaksesan Class -->

<?php
// Membuat Class
class Produk
{
    var $judul, $penerbit, $pengarang, $tahun_terbit;

    function setJudul($judul)
    {
        $this->judul = $judul;
    }
    function getData()
    {
        return $this->judul;
    }
}

// mengakses Class untuk Objek1
$objek1 = new Produk();

$objek1->setJudul("Pemrograman Objek");




// class Produk
// {
//     // property
//     public $judul,
//         $penerbit,
//         $pengarang,
//         $tahunTerbit;

//     // method
//     public function setData($judul = "null", $pengarang = "Anonim", $penerbit = "Anonim", $tahunTerbit = "1999")
//     {
//         $this->judul = $judul;
//         $this->penerbit = $penerbit;
//         $this->pengarang = $pengarang;
//         $this->tahunTerbit = $tahunTerbit;
//     }

//     public function getData()
//     {
//         return "Judul : {$this->judul} , Pengarang: {$this->pengarang}, Penerbit:  {$this->penerbit}, Tahun Terbit : {$this->tahunTerbit}";
//     }
// }


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soal 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-2">
        <?php

        // membuat objek dari Class
        $produk1 = new Produk();
        $produk1->setData("Tutorial flutter", "Budi Raharjo", "Informatika", "12 Mei 2018");
        echo "Produk 1 = " . $produk1->getData();
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>