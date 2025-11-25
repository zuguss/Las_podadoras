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

  <title>contacto</title>
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
                <h1>Contacto</h1>
                <h2>Ubicación</h2>
                <p><b>Dirección: </b>Av. Adolfo López Mateos #322 Col. San Luis Mextepec; Toluca, Edo. Mex.</p>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470.71574054909865!2d-99.72569042701839!3d19.294281435194332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8775340bf587%3A0xc8b312c1a9b1e198!2sLas%20Podadoras!5e0!3m2!1ses-419!2smx!4v1761535976795!5m2!1ses-419!2smx" width="400" height="300" style="border:2px double black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p><b>Teléfono: </b>722 375 9659</p>
                <p><b>Correo electrónico: </b> las_podadoras_zina@hotmail.com</p>
                <p><b>Facebook: </b><a href="https://www.facebook.com/profile.php?id=100057361543150">
                        las_podadoras_zina</a></p>

                <h2>Formulario de Contacto</h2>

                <form id="form1" name="form1" method="post" action="#" onsubmit="return validarForm(this);">

                    <p><label for="txt_Name">Nombre</label><br>
                        <input type="text" name="txt_Name" id="txt_Name"
                            onkeyup="this.value=this.value.toUpperCase();" />
                    </p>

                    <p><label for="txt_Mail">Correo electrónico</label><br>
                        <input type="email" name="txt_Mail" id="txt_Mail"
                            onkeyup="this.value=this.value.toLowerCase();" />
                    </p>

                    <p><label for="txt_Msg">Mensaje</label><br>
                        <textarea type="msg" name="msg" id="txt_Msg"></textarea>
                    </p>
                    <p><button type="submit" id="btn_guardar">Enviar</button></p>
                </form>
            </div>            
    </div>
    <!-- ************  FOOTER  *************** -->
    <?php include("php/footer.php"); ?>
</div>
</body>
</html>