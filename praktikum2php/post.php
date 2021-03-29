<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="POST" action="postAct.php">
            <table width="400" align="center" cellpadding="2" cellspacing="2">
            <!--membuat tabel-->
                <tr>
                    <td width="130">Nama</td>
                    <td><input type="text" name="nama"></td>
                    <!--untuk menginput nama-->
                </tr>
                <tr>
                    <td width="130">Email</td>
                    <td><input type="text" name="email"></td>
                    <!--untuk menginput email-->
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="btnLogin" value="Kirim">
                        <!--membuat button submit-->
                        <input type="reset" name="reset" value="Reset">
                        <!--membuat button reset-->
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>