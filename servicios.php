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
                <div>
                    <h1>Productos y Servicios</h1>

                    <h2>Productos</h2>
                    <h4>DESBROZADORAS</h4>
                    <!-- PRODUCTO 1 -->
                    <table style="background-color:rgb(247, 246, 247);"">
                        <tr>
                            <td><img src=" img/producto1.jpg".jpg" width="200px">
                        </td>
                        <td>
                            <ul text-align: left;>
                                <li><strong>Desbrozadora STIHL FS-38</strong></li>
                                <li><strong>$3,300.00</strong></li>
                                <li><strong>Descripción: </strong><em>La FS 38 es la herramienta de entrada ideal para
                                        propietarios de
                                        jardines. La desbrozaroda ligera de 4.2 kg es perfecta para recortar bordes y
                                        césped pequeño. Este cortacésped compacto y maniobrable elimina de forma fiable
                                        el césped y las maleza incluso en caminos y escaleras.</em></li>
                            </ul>
                            <button onclick="agregar();">Agregar</button>
                            <p id="agregar"></p>
                        </td>
                        </tr>
                    </table>
                    <br>
                    <!-- PRODUCTO 2 -->
                    <table style="background-color:rgb(247, 246, 247);"">
                        <tr>
                            <td><img src=" img/producto3.jpg".jpg" width="200px">
                        </td>
                        <td>
                            <ul text-align: left;>
                                <li><strong>Desbrozadora STIHL FS-120</strong></li>
                                <li><strong>$9,100.00</strong></li>
                                <li><strong>Descripción: </strong><em>Es ideal para la limpieza profesional.
                                        Un eje de transmisión rígido garantiza el máximo rendimiento durante todo el
                                        día.
                                        La empuñadura Elastostart garantiza una fácil puesta en marcha y un sistema de
                                        filtro de larga duración, con compensador y autolimpieza, alarga
                                        considerablemente los intervalos entre limpiezas.</em></li>
                            </ul>
                            <button onclick="agregar();">Agregar</button>
                            <p id="agregar"></p>
                        </td>
                        </tr>
                    </table>
                    <br>
                    <h4>ACEITES</h4>
                    <!-- PRODUCTO 3 -->
                    <table style="background-color:rgb(247, 246, 247);"">
                        <tr>
                            <td><img src=" img/producto2.jpg".jpg" width="200px">
                        </td>
                        <td>
                            <ul text-align: left;>
                                <li><strong>Aceite AFOSA 2T 1L</strong></li>
                                <li><strong>$230.00</strong></li>
                                <li><strong>Descripción: </strong><em>Aditivo mineral especialmente elaborado para uso
                                        en motores de 2 tiempos enfriados por aire. Ofrece una excelente lubricación y
                                        poco humo. Además protege contra la oxidación y la corrosión, minimiza la
                                        carbonización y proporcionan un excelente desempeño mientras reduce el
                                        desgaste.</em></li>
                            </ul>
                            <button onclick="agregar();">Agregar</button>
                            <p id="agregar"></p>
                        </td>
                        </tr>
                    </table>
                    <br>
                    <!-- PRODUCTO 4 -->
                    <table style="background-color:rgb(247, 246, 247);"">
                        <tr>
                            <td><img src=" img/producto4.jpg".jpg" width="200px">
                        </td>
                        <td>
                            <ul text-align: left;>
                                <li><strong>Aceite STIHL 2T 400ml</strong></li>
                                <li><strong>$145.00</strong></li>
                                <li><strong>Descripción: </strong><em>Este aceite para motores de dos tiempos posee
                                        características excepcionales de limpieza, además de cualidades lubricantes
                                        "ultra" superiores a las de otros aceites para motores de dos tiempos.</em></li>
                            </ul>
                            <button onclick="agregar();">Agregar</button>
                            <p id="agregar"></p>
                        </td>
                        </tr>
                    </table>
                    <h2>Servicios</h2>
                    <h4>MANTENIMIENTO PREVENTIVO: EQUIPOS DE CONSTRUCCIÓN</h4>
                    <!-- SERVICIO 1 -->
                    <table style="background-color:rgb(247, 246, 247);"">
                        <tr>
                            <td><img src=" img/servicio1.jpg".jpg" width="200px">
                        </td>
                        <td>
                            <ul text-align: left;>
                                <li><strong>Mantenimiento a Bailarina</strong></li>
                                <li><strong>$680.00</strong></li>
                                <li><strong>Incluye: </strong><em></em></li>
                                <ul>
                                    <li>Lavada de carburador</li>
                                    <li>Cambio de bujía</li>
                                    <li>Limpieza de filtro</li>
                                    <li>Limpieza completa de la maquina</li>
                                </ul>
                            </ul>
                            <button onclick="agregar();">Agregar</button>
                            <p id="agregar"></p>
                        </td>
                        </tr>
                    </table>
                    <br>

                    <!-- SERVICIO 2 -->
                    <table style="background-color:rgb(247, 246, 247);"">
                        <tr>
                            <td><img src=" img/servicio2.jpg".jpg" width="200px">
                        </td>
                        <td>
                            <ul text-align: left;>
                                <li><strong>Mantenimiento a Genereador de Luz</strong></li>
                                <li><strong>$560.00</strong></li>
                                <li><strong>Incluye: </strong></li>
                                <ul>
                                    <li>Lavada de carburador</li>
                                    <li>Cambio de bujía</li>
                                    <li>Limpieza de filtro</li>
                                    <li>Limpieza completa de la maquina</li>
                                </ul>
                            </ul>
                            <button onclick="agregar();">Agregar</button>
                            <p id="agregar"></p>
                        </td>
                        </tr>
                    </table>
                    <br>

                    <h4>MANTENIMIENTO PREVENTIVO A EQUIPOS DE JARDINERÍA.</h4>
                    <!-- SERVICIO 3 -->
                    <table style="background-color:rgb(247, 246, 247);"">
                        <tr>
                            <td><img src=" img/servicio3.jpg".jpg" width="200px">
                        </td>
                        <td>
                            <ul text-align: left;>
                                <li><strong>Mantenimiento a Podadora</strong></li>
                                <li><strong>$560.00</strong></li>
                                <li><strong>Incluye: </strong></li>
                                <ul>
                                    <li>Lavada de carburador</li>
                                    <li>Cambio de bujía</li>
                                    <li>Limpieza de filtro</li>
                                    <li>Limpieza completa de la maquina</li>
                                </ul>
                            </ul>
                            <button onclick="agregar();">Agregar</button>
                            <p id="agregar"></p>
                        </td>
                        </tr>
                    </table>
                    <br>

                    <!-- SERVICIO 4 -->
                    <table style="background-color:rgb(247, 246, 247);"">
                        <tr>
                            <td><img src=" img/servicio4.jpeg".jpg" width="200px">
                        </td>
                        <td>
                            <ul text-align: left;>
                                <li><strong>Mantenimiento a Desbrozadora</strong></li>
                                <li><strong>$350.00</strong></li>
                                <li><strong>Incluye: </strong></li>
                                <ul>
                                    <li>Lavada de carburador</li>
                                    <li>Cambio de bujía</li>
                                    <li>Limpieza de filtro</li>
                                    <li>Limpieza completa de la maquina</li>
                                </ul>
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