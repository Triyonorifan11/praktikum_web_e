<!-- 1a. Buat kode PHP berbasis IF-ELSE untuk menampilkan nama hari dalam bahasa indonesia saat diisikan angka urutan harinya. Dimana, 1 = senin, 2 = selasa, 3 = rabu, 4=kamis, 5 = jumat, 6 = sabtu, dan minggu =7 -->
<?php
function soal1a()
{
    if (isset($_GET["numberday"])) {
        $input = $_GET["numberday"];
        if ($input == 1) {
            $hari = "Senin";
        } elseif ($input == 2) {
            $hari = "Selasa";
        } elseif ($input == 3) {
            $hari = "Rabu";
        } elseif ($input == 4) {
            $hari = "Kamis";
        } elseif ($input == 5) {
            $hari = "Jumat";
        } elseif ($input == 6) {
            $hari = "Sabtu";
        } elseif ($input == 7) {
            $hari = "Minggu";
        } else {
            $hari = "Masukkan angka 1-7 saja";
        }
    }
    return $hari;
}
?>

<!-- 1b. Buat kode PHP berbasis SWITCH-CASE untuk menampilkan nama bulan dalam bahasa indonesia saat diisikan angka urutan harinya. Dimana,1 = Januari, 2 = Februari, 3 = Maret, 4=April, 5 = Mei, 6 = Juni, 7 = Juli, 8 = Agustus, 9 = September, 10=Oktober, 11 = Nopember, 12 = Desember -->
<?php
function soal1b()
{
    if (isset($_GET["numbermount"])) {
        $input = $_GET["numbermount"];
        switch ($input) {
            case 1:
                $bulan = "Januari";
                break;
            case 2:
                $bulan = "Februari";
                break;
            case 3:
                $bulan = "Maret";
                break;
            case 4:
                $bulan = "April";
                break;
            case 5:
                $bulan = "Mei";
                break;
            case 6:
                $bulan = "Juni";
                break;
            case 7:
                $bulan = "Juli";
                break;
            case 8:
                $bulan = "Agustus";
                break;
            case 9:
                $bulan = "September";
                break;
            case 10:
                $bulan = "Oktober";
                break;
            case 11:
                $bulan = "November";
                break;
            case 12:
                $bulan = "Desember";
                break;
            default:
                $bulan = "Masukkan angka 1-12";
                break;
        }
    }
    return $bulan;
}
?>

<!-- 2a Buat Kode PHP untuk menmpilkan bentuk segitiga menghadap kanan atas dan kanan bawah menggunakan FOR yang disusun menggunakan symbol * penuh dimana terdapat isian tinggi yang yang dapat dirubah rubah menggunakan scrollbar -->

<?php
function soal2a()
{
    if (isset($_GET["segitiga_2a"])) {
        $tinggi = $_GET["segitiga_2a"];

        echo "HADAP KANAN ATAS <br>";
        for ($a = 1; $a <= $tinggi; $a++) {
            for ($b = 1; $b <= $a; $b++) {
                echo "*";
            }
            echo "<br>";
        }

        echo "<br> HADAP KANAN BAWAH <br>";
        for ($a = 1; $a <= $tinggi; $a++) {
            for ($b = $tinggi; $b >= $a; $b--) {
                echo "*";
            }
            echo "<br>";
        }
    }
}
?>

<!-- 2b Buat Kode PHP untuk menmpilkan bentuk segitiga menghadap kanan atas dan kanan bawah menggunakan WHILE / DO-WHILE yang disusun menggunakan symbol * penuh dimana terdapat isian tinggi yang yang dapat dirubah rubah menggunakan scrollbar -->
<?php
function soal2b()
{
    if (isset($_GET["segitiga_2b"])) {
        $tinggi = $_GET["segitiga_2b"];

        echo "HADAP KANAN ATAS <br>";
        $a = 1;
        do {
            $b = 1;
            do {
                echo "*";
                $b++;
            } while ($b <= $a);
            echo "<br>";
            $a++;
        } while ($a <= $tinggi);

        echo "<br> HADAP KANAN BAWAH <br>";
        $a = 1;
        do {
            $b = $tinggi;
            do {
                echo "*";
                $b--;
            } while ($b >= $a);
            echo "<br>";
            $a++;
        } while ($a <= $tinggi);
    }
}


// soal 3a
// <!-- 3a. Tampilkan list nama aset tanpa '_idr' yang memiliki urutan genap -->
include("data/dataset.php");
function soal3a()
{
    global $daftaraset;
    foreach ($daftaraset as $daftar => $value) {
        $hasil = explode('_', $value);
        if ($daftar % 2 == 0) {
            echo $hasil[0] . ', ';
        }
    }
}

// 3b. Tampilkan list nama aset tanpa '_idr' yang memiliki urutan ganjil
function soal3b()
{
    global $daftaraset;
    foreach ($daftaraset as $daftar => $value) {
        $hasil = explode('_', $value);
        if ($daftar % 2 != 0) {
            echo $hasil[0] . ', ';
        }
    }
}

// 3c. Tampilkan list nama aset tanpa '_idr' yang memiliki urutan bilangan prima
function soal3c()
{
    global $daftaraset;
    $count = count($daftaraset);
    for ($i = 0; $i < $count; $i++) {
        $a = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $a++;
            }
        }
        if ($a == 2) {
            $hasil = explode('_', $daftaraset[$i]);
            echo $hasil[0] . ', ';
        }
    }
}


// 3d. Tampilkan list nama aset tanpa '_idr' yang memiliki awalan a,c,e,g,i,k,m,o,q,s,u,w, dan y
function soal3d()
{
    global $daftaraset;
    foreach ($daftaraset as $daftar => $value) {
        $hasil = explode('_', $value);
        $prefix = substr("$hasil[0]", 0, 1);

        if (
            $prefix == "a" || $prefix == "c" || $prefix == "e" || $prefix == "g" || $prefix == "i" || $prefix == "k" || $prefix == "m" ||
            $prefix == "o" || $prefix == "q" || $prefix == "s" || $prefix == "u" || $prefix == "w" || $prefix == "y"
        ) {
            echo $hasil[0] . ', ';
        }
    }
}

// 3e. Tampilkan list nama aset tanpa '_idr' yang memiliki awalan b,d,f,h,j,l,n,p,r,t,v,x, dan z
function soal3e()
{
    global $daftaraset;
    foreach ($daftaraset as $daftar => $value) {
        $hasil = explode('_', $value);
        $prefix = substr("$hasil[0]", 0, 1);

        if (
            $prefix == "b" || $prefix == "d" || $prefix == "f" || $prefix == "h" || $prefix == "j" || $prefix == "l" || $prefix == "n" ||
            $prefix == "p" || $prefix == "r" || $prefix == "t" || $prefix == "v" || $prefix == "x" || $prefix == "z"
        ) {
            echo $hasil[0] . ', ';
        }
    }
}


// 3f. Tampilkan list nama aset tanpa '_idr' yang memiliki awalan huruf vokal saja
function soal3f()
{
    global $daftaraset;
    foreach ($daftaraset as $daftar => $value) {
        $hasil = explode('_', $value);
        $prefix = substr("$hasil[0]", 0, 1);

        if ($prefix == "a" || $prefix == "i" || $prefix == "u" || $prefix == "e" || $prefix == "0") {
            echo $hasil[0] . ', ';
        }
    }
}
?>