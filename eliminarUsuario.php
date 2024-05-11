<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="recursos/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="recursos/hojasEstilo/estilos-TerceraPagina.css">
    <link rel="shortcut icon" href="recursos/Media/logo-removebg-preview.png" type="image/x-icon">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>ELIMINAR</title>
  </head>

  <body>
<!-- aqui inica el navbar -->

  <nav >

          <div class="nav-wrapper">
            <a href="recursos/Media/vine.jpeg" class="brand-logo right"><img src="recursos/Media/logo-removebg-preview.png" alt="logo" width="60px" style="margin-top: 5px;" ></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
              <li><a href="index.php">Home</a></li>
              <li><a href="formulario.php">Citas</a></li>
              <li><a href="verCitas.php">Revisar Citas</a></li>
            </ul>
            <div class="titulo_principal"><b>VELOCIMOTOR</b></div>
            
          </div>
    </nav>

      
<!-- aqui inicia el formulario -->


  <div class="row">
        <div class="col s12 m4 l2"><p></p></div>
        <div class="col s12 m4 l8 form-formato"><p>
            
          <h3 style="text-align: center;">Eliminar</h3>

          <div class="card-panel hoverable"> 
              

    <form  method="POST" action="deleteUsuario.php">
   
   
  <div class="row">
    <div class="input-field col s12">
      <input id="eliminar" type="text" class="validate" style="text-align: center;" name="eliminar" required>
      <label for="eliminar" style="text-align: center;">Numero De Cita</label>
    </div>
  </div>


  <center>
        <button class="btn waves-effect waves-light" type="submit" name="action">Borrar
          <i class="material-icons right">cancel</i>
    
        

         <!--  <a href="index.php"><button class="btn waves-effect waves-light" type="button" name="action">Inicio
        <i class="material-icons right">account_balance</i></a> -->

    </center>
    <br>
      <a href="index.php">REGRESAR</a>
      </form>

        </div>
        </p></div>
        <div class="col s12 m4 l2"><p></p></div>
      </div>







    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="recursos/js/materialize.min.js"></script>
  </body>