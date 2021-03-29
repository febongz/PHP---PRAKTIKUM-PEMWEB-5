<?php //perintah php
if (empty($_POST['nama']) || (empty($_POST['email']))) { header("location:redirect.php");
//jika nilai dari 'nama' kosong atau nilai dari 'email' kosong maka redirect kehalaman redirect.php//
} else { //jika tidak maka ...//
echo " Nama :".$_POST['nama']."<br>"; 
//print teks "Nama" dan mengambil nilai dari method post input type nama
echo " Email :".$_POST['email']."<br>";
//print teks "Email" dan mengambil nilai dari method post input type email
date_default_timezone_set('Asia/Jakarta'); 
//setting default timezone menjadi Asia/jakarta
echo date('H:i:s a, l-d-m-Y'); 
//menampilkan tanggal, hari, dan waktu
}
?>