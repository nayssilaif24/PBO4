<?php
// ===============================================
// Program: Menghitung Luas Lingkaran (OOP PHP)
// File   : index.php
// ===============================================

class LuasLingkaran {
    // Konstanta (nilai tetap)
    public const PHI = 3.14;

    // Property
    public int $jari;

    // Constructor -> otomatis dijalankan saat objek dibuat
    public function __construct($isiJari = 1) {
        $this->jari = $isiJari;
    }

    // Method untuk menampilkan hasil luas lingkaran
    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::PHI * $this->jari * $this->jari;
        echo "Lingkaran {$nama} hasilnya adalah: {$rumus}";
    }

    // Method static -> bisa dipanggil tanpa membuat objek
    public static function testing() {
        echo "<br/>";
        echo "ini dari static";
    }

    // Destructor -> otomatis dijalankan saat objek dihapus / script selesai
    public function __destruct() {
        echo "<br/>";
        echo "udah ah cape";
    }
}

// ===============================================
// Bagian utama program (main)
// ===============================================

// Membuat objek baru dari class LuasLingkaran dengan jari-jari = 7
$lingkaran = new LuasLingkaran(7);

// Memanggil method tampil
$lingkaran->tampil('roda');

// Memanggil method static
LuasLingkaran::testing();
?>
