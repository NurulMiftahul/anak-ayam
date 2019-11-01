<!DOCTYPE html>
<html>
<head>
	<title>Anak Ayam</title>
	<style>
		.ganjil{
			color: orange;
		}
		.genap{ 
			color: blue; 
		}
	</style>
</head>
<body>
	<?php
	$i = 6;
	echo "Tekotek-kotek kotek anak ayam turunlah $i <br>";
		for ($anak_ayam=$i-1; $anak_ayam >= 0; $anak_ayam--) {
		if ($anak_ayam % 2 == 1) {
 		echo "<p class='ganjil'> Mati Satu Tinggallah $anak_ayam <br></p>";
 		}elseif($anak_ayam == 0){
 			echo "Mati satu habis semua T_T hiks <br>";
 		}else{
 		echo "<p class='genap'> Mati Satu Tinggallah $anak_ayam <br></p>"; 
 	}
}
?>
</body>
</html>