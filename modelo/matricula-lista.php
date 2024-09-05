<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class = "row" class = "col-lg-12">
                <h1>Lista de Matriculas Realizadas</h1>
                <table class = "table">
                    <tr>
                        <td><b>Codigo</b></td>
                        <td><b>Nombres</b></td>
                        <td><b>Apellidos</b></td>
                        <td><b>DNI</b></td>
                        <td><b>Telefono</b></td>
                        <td><b>Correo</b></td>
                    </tr>

<?php
        include '../database/conexion.php';
        
        $con = new Conexion();
        $sql = "select * from estudiantes;";
        $query = mysqli_query($con->getConexion(), $sql);
        while ($result = mysqli_fetch_array($query)){
            echo '            
                <tr>
                    <td>'.$result["id"].'</td>
                    <td>'.$result["nombres"].'</td>
                    <td>'.$result["apellidos"].'</td>
                    <td>'.$result["dni"].'</td>
                    <td>'.$result["telefono"].'</td>
                    <td>'.$result["correo"].'</td>   
                </tr>';
        }
?>
                    
            </div>
        </div>
    </body>
</html>
