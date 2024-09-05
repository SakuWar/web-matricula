<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class = "row" class = "col-lg-12">
                <h1>Mensajes Recividos</h1>
                <table class = "table">
                    <tr>
                        <td><b>Codigo</b></td>
                        <td><b>Correo</b></td>
                        <td><b>Nombres</b></td>
                        <td><b>Mensaje</b></td>
                    </tr>

<?php
        include '../database/conexion.php';
        
        $con = new Conexion();
        $sql = "select * from contacto;";
        $query = mysqli_query($con->getConexion(), $sql);
        while ($result = mysqli_fetch_array($query)){
            echo '            
                <tr>
                    <td>'.$result["id_contac"].'</td>
                    <td>'.$result["nombres"].'</td>
                    <td>'.$result["email"].'</td>
                    <td>'.$result["mensaje"].'</td>
                </tr>';
        }
?>
    </body>
</html>
