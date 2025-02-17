<h3>SINAUNO MATEMATIKA</h3>
<br>
<?php
$angka1 = 5;
$angka2 = 2;
$penjumlahan = $angka1 + $angka2;
$x = $angka1 * $angka2;
$bagi = $angka1 / $angka2;
$kurang = $angka1 - $angka2;

echo $angka1 . " + " . $angka2 . " = " . $penjumlahan;
echo "<br> $angka1 x $angka2 = $x";
echo "<br> $angka1 / $angka2 = $bagi";
echo "<br> $angka1 - $angka2 = $kurang";
echo "<br> $angka1 <sup> $angka2 </sup> = "; //sup perpangkatan di html
echo pow($angka1,$angka2); //pow itu perpangkatan di PHP
echo "<br>";
print pow(3,5); //angka1 itu dasar, angka2 itu eksponen (pangkatnya)

?>
