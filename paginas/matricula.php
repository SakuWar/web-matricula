<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../css/matricula-style.css"/>
    </head>
    <body>
    <iframe src="header.php" width="100%" height="170px" frameborder="0"></iframe>
        <?php
        $conexion = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conexion,"matricula");
        $user=$_REQUEST['txtuser'];
        $pass=$_REQUEST['txtpass'];
        $sql="select * from usuarios where usuario='{$user}' and contraseña='{$pass}'";
        $datos=mysqli_query($conexion,$sql);
        $row=mysqli_fetch_array($datos);
        if($datos->num_rows>0){
                echo '<div class="card-client">';
                echo '<p class="name-client">Bienvenid@ : '.$user.'</p>';
                echo '</div>';
        }
        else{
                echo 'usuario no existe';
                echo "<a href='login.php' >IR A INICIO</A>";
        }
        ?>
        <div class="container">
            <h2>Matricula a tu hij@ ya!!</h2>
            <form action="PagarMatricula.php" method="post">
                <label>Nombres</label>
                <input type="text" id="txtnom" name="txtnom" placeholder="Nombres" required>
                <label>Apellidos</label>
                <input type="text" id="txtape" name="txtape" placeholder="Apellidos" required><br>
                <label>DNI</label>
                <input type="number" id="txtdni" name="numdni" placeholder="DNI" required>
                <label>Telefono</label>
                <input type="number" id="txttele" name="numtele" placeholder="Telefono" required><br>
                <label>Correo</label>
                <input type="email" id="txtcorreo" name="txtemail" placeholder="Correo" required><br>
                <button type="submit" id="btn">Matricular</button>
            </form>
        </div>
    </body>
</html>
