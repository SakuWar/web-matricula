<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contacto - Colegio Secundaria LAS PALMERAS</title>
        <link rel="stylesheet" href="../css/contact-style.css"/>
    </head>
    <body>
        <header>
            <img src="../imagen/logo.png" width="150px" alt="logo"/>
            <h2>Colegio Secundaria LAS PALMERAS</h2>
            <nav>
                <ul>
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="acerca.php">Acerca de Nosotros</a></li>
                    <li><a href="contact.php">Contacto</a></li>
                </ul>
            </nav>
        </header>
        
        <section>
            <h2>Contacto</h2>
            <p>Si tienes alguna pregunta o necesitas más información, no dudes en contactarnos. Estamos aquí para ayudarte.</p>
            <form action="send_message.php" method="post">
                <label for="name">Nombre:</label><br>
                <input type="text" id="name" name="name" required><br>
                <label for="email">Correo electrónico:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="message">Mensaje:</label><br>
                <textarea id="message" name="message" required></textarea><br>
                <input type="submit" value="Enviar">
            </form>
        </section>
    </body>
</html>

