<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $conexion = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conexion,"matricula");
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $mensaje=$_REQUEST['message'];
        $sql="insert into contacto (email, nombres, mensaje) values ('{$name}','{$email}','{$mensaje}')";
        $datos=mysqli_query($conexion,$sql);
        //para varias filas
                echo 'Mensaje enviado correctamente';
        ?>
    </body>
</html>
