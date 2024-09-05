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
        $name=$_REQUEST['nombre'];
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $sql="insert into usuarios (usuario, contraseña) values ('{$name}','{$password}');";
        $datos=mysqli_query($conexion,$sql);
        //para varias filas
                echo 'Usuario Creado Correctamente';
        ?>
    </body>
</html>
