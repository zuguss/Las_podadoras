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
    <div id="header">
      <!-- ************  MENU  *************** -->
      <?php include('php/menu.php'); ?>
    </div>
    <div id="section">
      <h1>Registrarse</h1>
      <h2>Datos personales</h2>

      <form id="form1" name="form1" method="post" action="#" onsubmit="return validarForm(this);">

        <!-- NOMBRE -->
        <p>
          <label for="txt_Name">Nombre</label><br>
          <input type="text" name="txt_Name" id="txt_Name" onkeyup="this.value=this.value.toUpperCase();" />
        </p>

        <!-- APELLIDOS -->
        <p>
          <label for="txt_LastName">Apellido Paterno</label><br>
          <input type="text" name="txt_Ape_pat" id="txt_LastName" onkeyup="this.value=this.value.toUpperCase();" />
        </p>
        <p>
          <label for="txt_LastName">Apellido Materno</label><br>
          <input type="text" name="txt_Ape_mat" id="txt_LastName" onkeyup="this.value=this.value.toUpperCase();" />
        </p>
        <!-- SEXO -->
        <p>
          <label>Sexo</label><br>
          <input type="radio" id="rad_Male" name="rad_gender" value="Masculino">
          <label for="rad_Male">Masculino</label><br>

          <input type="radio" id="rad_Female" name="rad_gender" value="Femenino">
          <label for="rad_Female">Femenino</label>
        </p>

        <!-- TELÉFONO -->
        <p>
          <label for="txt_Telephone">Número de teléfono</label><br>
          <input type="text" name="txt_Telephone" id="txt_Telephone" maxlength="10" />
        </p>

        <!-- CORREO -->
        <p>
          <label for="txt_Mail">Correo electrónico</label><br>
          <input type="email" name="txt_Mail" id="txt_Mail" onkeyup="this.value=this.value.toLowerCase();" />
        </p>
        <p><label for="pas_password">Password </label><br>
          <input name="pas_password" type="password" required />
        </p>
        <p><label for="pas_password2">confirmar Password </label><br>
          <input name="pas_password2" type="password" required />
        </p>

        <!-- DIRECCIÓN -->
        <h3>Dirección</h3>

        <p>
          <label for="txt_NameStreet">Nombre de la calle</label><br>
          <input type="text" name="txt_NameStreet" id="txt_NameStreet" onkeyup="this.value=this.value.toUpperCase();" />
        </p>

        <p>
          <label for="txt_Number">Número de casa</label><br>
          <input type="text" name="txt_Number" id="txt_Number" />
        </p>

        <p>
          <label for="txt_Col">Colonia</label><br>
          <input type="text" name="txt_Col" id="txt_Col" onkeyup="this.value=this.value.toUpperCase();" />
        </p>

        <p>
          <label for="txt_CP">Código postal</label><br>
          <input type="text" name="txt_CP" id="txt_CP" maxlength="5" />
        </p>

        <p>
          <label for="txt_Mun">Municipio</label><br>
          <input type="text" name="txt_Mun" id="txt_Mun" onkeyup="this.value=this.value.toUpperCase();" />
        </p>

        <p>
          <button type="submit" id="btn_guardar">Guardar</button>
        </p>
      </form>
    </div>
    <!-- ************  FOOTER  *************** -->
    <?php include("php/footer.php"); ?>
  </div>
  <script src="js/validacion.js"></script>
</body>

</html>