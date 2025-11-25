<?php session_start(); //creamos la sesion ?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Sistemas computacionales">
  <meta name="keywords" content="MySql, conexión, Wamp">
  <meta name="author" content="Ramirez Erik, Sistemas">

  <title>index</title>
  <!-- estilos  -->
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/menu.css">
</head>

<body> 
<div id="container">
        
    <div id="header">
        <!-- ************  MENU  *************** -->
        <?php include('php/menu.php');?>
    </div>
    <div id="content">
        <div id="section">
            <!-- ************  CONTENIDO  *************** -->
            <form action="validar_usuario.php" method="post">
                <h2>Inicio de sesión</h2>
                <table align="center">  
                    <tr>
                        <td>Usuario:</td>
                        <td><input name="ema_email" type="email" value="" required /></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input name="pas_password" type="password" value="" required /></td> 
                    </tr>
                    <tr>
                        <td></td>
                        <td style="text-align:right;"><a href="registrar.php">Regsitrarse</a></td> 
                    </tr>
                    <tr>
                        <td></td>
                        <td><input name="iniciar" type="submit" value="Iniciar Sesión" /></td>
                    </tr>
                  </table>
            </form>
        </div>
    </div>
    <!-- ************  FOOTER  *************** -->
    <?php include("php/footer.php"); ?>
</div>
</body>
</html>