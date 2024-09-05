<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../css/login-secretaria-style.css"/>
    </head>
    <body>
    <iframe src="header.php" width="100%" height="170px" frameborder="0" ></iframe>
    <body>
        <div class="container">
            <h2 style="text-align: center">Cuenta Secretaria</h2>
            <form action="ventana-secretaria.php" method="post">
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
                        <td><input type="submit" name="btn" id="btn" value="Ingresar"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
    </body>
</html>
