<?php

require_once("./LuasLingkaran"): //panggil file LuasLingkaran.php

use App\Math\LuasLingkaran; //panggil namespace

$lingkaran = new LuasLingkaran(7);
$lingkaran->tampil('roda'); // panggil method
LuasLingkaran::testing();
?>
