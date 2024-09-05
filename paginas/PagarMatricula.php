<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Proceso de Pago</title>
        <link rel="stylesheet" href="../css/PagarMatricula-style.css"/>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <iframe src="header.php" width="100%" height="170px" frameborder="0"></iframe>
        
    </head>
    <body>
        <?php
        // put your code here
        
        $conexion = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conexion,"matricula");
        $nom=$_REQUEST['txtnom'];
        $ape=$_REQUEST['txtape'];
        $dni=$_REQUEST['numdni'];
        $tele=$_REQUEST['numtele'];
        $email=$_REQUEST['txtemail'];
        $sql="insert into estudiantes (nombres, apellidos, dni, telefono, correo) values ('$nom', '$ape','$dni','$tele','$email');";
        $datos=mysqli_query($conexion,$sql);

        ?>
        
        <div class="container">
            <h2>Pago con Tarjeta</h2>
            <form>
                <label>Nombre en la Tarjeta</label>
                <input type="text" id="txttarj" placeholder="Nombre en la Tarjeta" required=""/>
                
                <label>Número de Tarjeta</label>
                <input type="number" id="numtarj" placeholder="Número de Tarjeta" required=""/>
                
                <label>Fecha de Vencimiento</label>
                <input type="month" id="fecha" required=""/>
                
                <label>Código de Seguridad (CVV)</label>
                <input type="text" id="cvv" placeholder="CVV" required=""/>
                
                <button class="button" id="btnpagar">
                    Pagar
                </button>
                <script src="../js/prueba.js"></script>
            </form>
        </div>        
    </body>
</html>

