<!-- https://www.duniailkom.com/tutorial-belajar-oop-php-pengertian-polimorfisme-dalam-pemrograman-objek-php/ -->

<!-- p. implementasi Polimorfisme dalam Pemrograman Objek -->

<?php
// buat abstract class
abstract class komputer
{
    // buat abstract method
    abstract public function booting_os();
}

class laptop extends komputer
{
    public function booting_os()
    {
        return "Proses Booting Sistem Operasi Laptop";
    }
}

class pc extends komputer
{
    public function booting_os()
    {
        return "Proses Booting Sistem Operasi PC";
    }
}

class chromebook extends komputer
{
    public function booting_os()
    {
        return "Proses Booting Sistem Operasi Chromebook";
    }
}


// buat objek dari class diatas
$laptop_baru = new laptop();
$pc_baru = new pc();
$chromebook_baru = new chromebook();

// buat fungsi untuk memproses objek
function booting_os_komputer($objek_komputer)
{
    return $objek_komputer->booting_os();
}

// jalankan fungsi
echo booting_os_komputer($laptop_baru);
echo "<br />";
echo booting_os_komputer($pc_baru);
echo "<br />";
echo booting_os_komputer($chromebook_baru);
?>

<br><br><br>

<?php
// buat abstract class
abstract class komputer2
{
    // buat abstract method
    abstract public function booting_os();
}

interface mouse
{
    public function double_klik();
}

class laptop2 extends komputer2 implements mouse
{
    public function booting_os()
    {
        return "Proses Booting Sistem Operasi Laptop";
    }
    public function double_klik()
    {
        return "Double Klik Mouse Laptop";
    }
}

class pc2 extends komputer2 implements mouse
{
    public function booting_os()
    {
        return "Proses Booting Sistem Operasi PC";
    }
    public function double_klik()
    {
        return "Double Klik Mouse PC";
    }
}

class chromebook2 extends komputer2 implements mouse
{
    public function booting_os()
    {
        return "Proses Booting Sistem Operasi Chromebook";
    }
    public function double_klik()
    {
        return "Double Klik Mouse Chromebook";
    }
}

// buat objek dari class diatas
$laptop_baru = new laptop2();
$pc_baru = new pc2();
$chromebook_baru = new chromebook2();

// buat fungsi untuk memproses objek
function booting_os_komputer2($objek_komputer)
{
    return $objek_komputer->booting_os();
}

function double_klik_komputer($objek_komputer)
{
    return $objek_komputer->double_klik();
}

// jalankan fungsi
echo booting_os_komputer2($laptop_baru);
echo "<br />";
echo double_klik_komputer($laptop_baru);
echo "<br />";
echo "<br />";

echo booting_os_komputer($pc_baru);
echo "<br />";
echo double_klik_komputer($pc_baru);
echo "<br />";
echo "<br />";

echo booting_os_komputer($chromebook_baru);
echo "<br />";
echo double_klik_komputer($chromebook_baru);
?>