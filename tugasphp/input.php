<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="hasil_input.php">
	<!--menggunakan method POST-->
		<table width="400" align="center" cellpadding="2" cellspacing="2"><!--membuat tabel-->
			<tr><!--membuat baris-->
				<td width="130">Nama </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr><!--baris baru-->
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td><!--baris baru-->
					<input type="submit" name="btnLogin" value="Login">
					<!--membuat button submit-->
					<input type="reset" name="reset" value="Reset">
					<!--membuat button reset-->
				</td>
			</tr>
		</table>
	</form>
</body>
</html>