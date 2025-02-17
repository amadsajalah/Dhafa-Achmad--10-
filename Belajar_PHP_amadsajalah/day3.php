<?php 

/*
$nilai = 70;

if($nilai <= 79 && $nilai >=70)
{
    echo "Grade: C = Calon bos engineer";
}
else if($nilai <= 100 && $nilai >=90){
    echo "Grade: A = Anjay";
}
else if($nilai <= 89 && $nilai >=80){
    echo "Grade: B = Baik";
}
else if ($nilai <=69 && $nilai > 0){
    echo "Grade D = Dongo";
}
else {
    echo "Nilai wajib diatas 0";
}
*/ 


$jamSekarang = date("3"); 


if ($jamSekarang >= 0 && $jamSekarang < 4) {
    $waktu = "Dini Hari";
} elseif ($jamSekarang >= 4 && $jamSekarang < 10) {
    $waktu = "Pagi Hari";
} elseif ($jamSekarang >= 10 && $jamSekarang < 15) {
    $waktu = "Siang";
} elseif ($jamSekarang >= 15 && $jamSekarang < 18) {
    $waktu = "Sore";
} elseif ($jamSekarang >= 18 && $jamSekarang <=  24) {
    $waktu = "Malam";
} else {
    $waktu = "KAMU DI NERAKA";
}


echo "<br> <br> Sekarang adalah jam: $jamSekarang:00 <br> Waktu: $waktu";
?>