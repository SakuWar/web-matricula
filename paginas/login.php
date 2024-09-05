<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="../css/login-style.css"/>
        <link rel="icon" href="../imagen/logo-ico.ico"/>
    </head>
    <iframe src="header.php" width="100%" height="170px" frameborder="0" ></iframe>
    <body>
        <div class="container">
            <h2 style="text-align: center">Cuenta Padre de Familia</h2>
            <form action="matricula.php" method="post">
                <table>
                    <tr>
                        <td>Usuario:</td>
                        <td><input type="text" name="txtuser" id="txtuser" placeholder="Usuario" required></td>
                    </tr>
                    <tr>
                        <td>Contraseña:</td>
                        <td><input type="password" name="txtpass" id="txpass" placeholder="Contraseña" required></td>
                    </tr>
                    <tr>
                        <td><button>Ingresar</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

