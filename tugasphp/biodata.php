<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="isi_biodata.php"> 
	<!--menggunakan method POST dan akan memanggil file isi_biodata.php setelah form disubmit-->
		<h2> Masukan Biodata Anda: </h2> 
		<table width="600"  cellpadding="2" cellspacing="2"> <!--membuat tabel-->
			<tr> <!--membuat baris-->
				<td width="130">Nama</td> 
				<td><input type="text" name="nama"></td> 
			</tr>
			<tr> <!--baris baru-->
				<td width="130">Email</td>
				<td><input type="text" name="email"></td> 
			</tr>
			<tr><!--baris baru-->
				<td width="130">NPM</td> 
				<td><input type="text" name="npm"></td> 
			</tr>
			<tr><!--baris baru-->
				<td width="130">Tempat dan Tanggal Lahir</td>
				<td><input type="text" name="ttl"></td> 
			</tr>
			<tr><!--baris baru-->
				<td width="130">Alamat</td> 
				<td><input type="text" name="alamat"></td> 
			</tr>
			<tr><!--baris baru-->
				<td width="130">Warna Favorit</td>
				<td><input type="text" name="warna"></td>
			</tr>
			<tr><!--baris baru-->
				<td width="130">Hobi</td>
				<td><input type="text" name="hobi"></td>
			</tr>
			<tr><!--baris baru-->
				<td>
					<input type="submit" name="btnLogin" value="Kirim">
					<!--membuat button login-->
					<input type="reset" name="reset" value="Reset"> 
					<!--membuat button reset-->
				</td>
			</tr>
		</table>
	</form>
</body>
</html>