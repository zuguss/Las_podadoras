<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Venta y reparación de motosierras y desbrozadoras">
    <meta name="keywords" content="Motosierras, STIHL, Oregon, Desbrozadoras">
    <meta name="author" content="Ramírez Erik">

    <title>Inicio | Pastfast - Productos forestales</title>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>

<div id="container">

    <!-- **************** HEADER / MENU **************** -->
    <div id="header">
        <?php include('php/menu.php'); ?>
    </div>

    <!-- **************** CONTENIDO **************** -->
    <div id="main">

        <!-- CONTENIDO PRINCIPAL -->
        <div id="section">

            <div style="text-align:center; margin-bottom:20px;">
                <img src="img/logo.jpg" alt="Logo" style="max-width: 280px;">
                <p style="font-size:18px; margin-top:10px;">Calidad profesional en equipos forestales</p>
            </div>

            <h2>Ofertas del Mes</h2>

            <div align="center">
                <img src="img/oferta.jpg" alt="Oferta del mes" width="180px">

                <p style="font-size: 20px; font-weight:bold; margin-top:10px;">
                    ¡APROVECHE LA OFERTA DEL MES!
                </p>

                <p style="max-width:600px;">
                    En la compra mínima de <strong>$100.00 pesos</strong> en productos,
                    <strong>la revisión de su máquina será completamente gratis.</strong>
                </p>

                <hr style="border:1px solid #f37021; width:80%;">

                <!-- OFERTA 1 -->
                <h4>Oferta para Nuevos Clientes</h4>

                <p>En su primera compra, obtenga un <strong>15% de descuento</strong> en una 
                <strong>Desbrozadora STIHL FS-38</strong>.</p>

                <table style="background-color:#f9f9f9; border:1px solid #ddd; width:90%; margin:auto;">
                    <tr>
                        <td style="padding:20px;">
                            <img src="img/producto1.jpg" width="220px">
                        </td>

                        <td style="padding:20px; text-align:left;">

                            <h3>Desbrozadora STIHL FS-38</h3>

                            <p style="font-size:20px;">
                                <del style="color:red;">$3,300.00</del>
                                <span style="color:#f37021; font-weight:bold;">$3,165.00</span>
                            </p>

                            <p>
                                La FS 38 es la herramienta ideal para jardines pequeños. Ligera (4.2 kg) 
                                y fácil de maniobrar para eliminar césped y maleza en bordes y caminos.
                            </p>

                            <button onclick="agregar();">Agregar al carrito</button>
                            <p id="agregar"></p>

                        </td>
                    </tr>
                </table>

            </div>

        </div>


        <!-- ************ SIDEBAR ************ -->
        <div id="sidebar">

            <h2>Horarios de atención</h2>

            <ul style="list-style:none; padding:0; line-height:1.8;">
                <li><strong>Lunes:</strong> 9:15 am - 6:00 pm</li>
                <li><strong>Martes:</strong> 9:15 am - 5:00 pm</li>
                <li><strong>Miércoles:</strong> 9:15 am - 6:00 pm</li>
                <li><strong>Jueves:</strong> 9:15 am - 6:00 pm</li>
                <li><strong>Viernes:</strong> 9:15 am - 6:00 pm</li>
                <li><strong>Sábado:</strong> 9:15 am - 2:00 pm</li>
                <li><strong>Domingo:</strong> Cerrado</li>
            </ul>

        </div>

    </div>

    <!-- **************** FOOTER **************** -->
    <?php include("php/footer.php"); ?>

</div>

<script>
</script>

</body>
</html>
