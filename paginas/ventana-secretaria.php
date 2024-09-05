<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ventana Secretaria</title>
        <link rel="icon" href="../imagen/logo-ico.ico"/>
        <script src="../js/newjavascript.js" type="text/javascript"></script>
        <link rel="stylesheet" href="../css/ventana-secretaria-style.css"/>
    </head>
    <iframe src="header.php" width="100%" height="170px" frameborder="0"></iframe>
    <body onload="listar()">
        <?php
        $conexion = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conexion,"matricula");
        $user=$_REQUEST['txtuser'];
        $pass=$_REQUEST['txtpass'];
        $sql="select * from secretaria where usuario='{$user}' and contraseña='{$pass}'";
        $datos=mysqli_query($conexion,$sql);
        $row=mysqli_fetch_array($datos);
        //para varias filas
        if($datos->num_rows>0){
                echo 'Bienvenid@ : '.$user;
        }
        else{
                echo 'usuario no existe';
                echo "<a href='login.php' >IR A INICIO</A>";
        }
        ?>

        <div class="container">
            <div class="row col-lg-12">
                <h1>Ventana Secretaria</h1>
                <form class="form-control">
                    <table class="table">
                        <tr>
                            <td><input type="button" id="btnlistar" class="btn btn-primary" value="Matriculas" onclick="listar()"></td>
                            <td><input type="button" id="btnlistar" class="btn btn-primary" value="Nuevo" onclick="nuevo()"></td>
                            <td><input type="button" id="btnlistar" class="btn btn-primary" value="Mensajes" onclick="mensajes()"></td>
                        </tr>
                    </table>
                    <p></p>
                    <hr>
                    <p id="mensaje"/>
                </form>
            </div>
        </div>
    </body>
</html>
