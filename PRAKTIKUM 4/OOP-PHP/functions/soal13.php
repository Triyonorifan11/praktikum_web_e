<!-- m. Implementasi Final Method dan Final Class -->
<!-- https://www.duniailkom.com/tutorial-belajar-oop-php-pengertian-final-method-dan-final-class-pemrograman-objek/ -->

<?php
class komputer
{
    final public function lihat_spec()
    {
        return "Lihat Spesifikasi Komputer";
    }
}

class laptop extends komputer
{
    public function lihat_spec()
    {
        return "Lihat Spesifikasi Laptop";
    }
}

$laptop_baru = new laptop();
// Fatal error: Cannot override final method
// komputer::lihat_spec()
?>


<!-- Final method dan final class bisa digunakan untuk membuat desain class yang terstruktur. Dalam tutorial OOP PHP selanjutnya, kita akan membahas tentang Pengertian Abstract Class dan Abstract Method dalam Pemrograman Objek PHP. -->