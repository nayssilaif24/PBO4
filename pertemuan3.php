<?php

class LuasLingkaran{

    public const phi = 3.14;
    public int $jari;

    public function tampil()  {
        $rumus = LuasLingkaran::phi * $this->jari * $this->jari;
        echo "Hasilnya adalah: ". $rumus;
    }
}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 7;
$lingkaran->tampil(); //panggil method
