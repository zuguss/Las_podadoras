<?php session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if (!isset($_SESSION['usuario']) || !isset($_SESSION['tipo'])) {
    echo "Usuario no Logueado";
    header('Location: login.php');
    exit();
}
?>

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

    <title></title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <div id="container">
        <div id="container">
            <div id="header">
        <!-- ************  MENU  *************** -->
        <?php include('php/menu_cliente.php');?>
    </div>
            <div id="main">
                <div id="section">
                    <div align="center">
                        <img src="img/logo.jpg">
                    </div>
                    <div id="sidebar">
                        <h2>Horarios de atención.</h2>
                        <P style="border: 2px dotted darkgreen; margin-left: 20px ;">Lunes 9:15 am - 6pm <br>
                            Martes 9:15 am-5pm <br>
                            Miercoles 9:15 am -6pm <br>
                            Jueves 9:15am - 6pm <br>
                            Viernes 9:15am - 6pm <br>
                            Sabado 9:15am -2 pm <br>
                            Domingo cerrado <br></P>
                    </div>
                    <h2>Ofertas</h2>
                    <div align="center">
                        <p><img src="img/oferta.jpg" alt="Oferta del mes" width="150px"></p>
                        <p style="font-size: 18px;"><b>¡APROVECHE LA OFERTA DEL MES!</b></p>
                        <p>Para este mes de Noviembre, en la compra minima de $100.00 pesos de productos, ¡la revisión
                            de su
                            máquina será completamente gratis!</p>
                        <hr>
                        <!-- OFERTA 1 -->
                        <h4>Oferta para Nuevos Clientes</h4>
                        <p>En su primera compra, ¡obtenga un 15% de descuento en una Desbrozadora STIHL FS-38!</p>
                        <table style="background-color:rgb(247, 246, 247);">
                            <tr>
                                <td><img src=" img/producto1.jpg" .jpg" width="200px">
                                </td>
                                <td>
                                    <ul text-align: left;>
                                        <li><strong>Desbrozadora STIHL FS-38</strong></li>
                                        <li><strong><del>$3,300.00</del></strong>
                                            <strong><mark>$3,165.00</mark></strong>
                                        </li>
                                        <li><strong>Descripción: </strong><em>La FS 38 es la herramienta de entrada
                                                ideal
                                                para
                                                propietarios de
                                                jardines. La desbrozaroda ligera de 4.2 kg es perfecta para recortar
                                                bordes
                                                y
                                                césped pequeño. Este cortacésped compacto y maniobrable elimina de forma
                                                fiable
                                                el césped y las maleza incluso en caminos y escaleras.</em></li>
                                    </ul>
                                    <button onclick="agregar();">Agregar</button>
                                    <p id="agregar"></p>
                                </td>
                            </tr>
                        </table>
                        <br>
                    </div>
                </div>
            </div>
            <!-- ************  FOOTER  *************** -->
            <?php include("php/footer.php"); ?>
        </div>
</body>

</html>