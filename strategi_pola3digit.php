<?php
$angka = "222131333232222322211113113113331113111123132212121213211212221332223";

	echo "Buat sebuah program untuk mencari pola/pattern dari string berikut: <br /> ".$angka."<br /><br />";

	echo "1. Berapa jumlah pola tiga digit angka yang muncul<br />";
	for ($a = 0; $a < (strlen($angka)- 2); $a++) {
		$Pola[$a] = substr($angka, $a, 3);
		echo $Pola[$a]."&nbsp" ;
		}
		echo "<br />";
		$values = array_count_values($Pola);
		$keys = array_keys($values);
		echo "Jumlah pola tiga digit angka yang muncul = ".count($Pola)."<br /><br />";
		
	echo "2. Berapa jumlah kemunculan dari pola tiga digit angka tersebut <br />";
	for ($a = 0; $a < count($values); $a++) {
		echo"Pola "; print($keys[$a]); echo"&nbsp muncul sebanyak "; print($values["$keys[$a]"]); echo"&nbsp kali <br />";
		}
?>