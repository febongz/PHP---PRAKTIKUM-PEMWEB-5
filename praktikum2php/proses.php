<?php
//memanggil file inc.php//
include "inc.php";
echo $angka;
//print variabel angka//
echo "<br>";
if ($angka==100){
    echo "Memuaskan";
} elseif ($angka<100&&$angka>=85){
    echo "Sangat Baik";
} elseif ($angka<85&&$angka>=70){
    echo "Baik";
} elseif ($angka<85&&$angka>=55){
    echo "Cukup";
} elseif ($angka<85&&$angka>=0){
    echo "Kurang";
}
//menggunakan relasional if else//
?>