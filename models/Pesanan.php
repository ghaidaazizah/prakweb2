<!-- Model dalam mvc berfungsi sebagai otak dari aplikasi karena memproses data dan atuuran bisnis yang terkait dengan database -->
<?php
class Pesanan{
    private $koneksi;

    public function __construct(){
         // function construck adalah sebuah function yang dijalankan awalan
         global $conn;
         $this->koneksi = $conn;
    }
    public function tampilPesanan(){
        // select semua kolom yang ada di dalam table produk
        $sql = "SELECT * FROM pesanan";
        // kirim data select menggunakan method prepare
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data select yang sudah di siapkan menggunakan method execute
        $ps->execute();
        // simpan data sql yang sudah di eksekusi ke dalam data array menggunakan method fetchall
        $data = $ps->fetchAll();
        // kembalikan data produk dalam bentuk data array yang sudah disimpan ke dalam variable data
        return $data;
    }
}
?>
<!-- view adalah tampilan aplikasi yang diterima di request ke dalam model -->