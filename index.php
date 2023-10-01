<?php
    include_once('assets/php/registros.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa Beenati</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class=" blue lighten-5">

    <div class="header">
        <h1>EMPRESA BEENATI</h1>
    </div>

    <h2>Añadir Empleados</h2>

    <div class="row">

    <form class="col s12" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

      <div class="row">

        <div class="input-field col s6">
          <input name="txtNombre" id="first_name" type="text" class="validate" pattern="^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$" required>
          <label for="first_name">Primer Nombre</label>
        </div>

        <div class="input-field col s6">
          <input name="txtApellido" id="last_name" type="text" class="validate" pattern="^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$" required>
          <label for="last_name">Primer Apellido</label>
        </div>

      </div>

      <div class="row">
        
        <div class="input-field col s6">
          <input name="txtEdad" id="age" type="number" class="validate" min="21" max="80" step="1" required>
          <label for="age">Edad</label>
        </div>

        <div class="input-field col s6">
          <input  type="number" name="txtSueldo" id="income" class="validate" min="100" max="10000" required>
          <label for="income">Sueldo</label>
        </div>

      </div>

      <div class="row">

        <div class="input-field col s6">
          <select name="txtSexo" id="idSexo">
            <option value="F">Femenino</option>
            <option value="M">Maculino</option>
          </select>
          <label>Sexo</label>
        </div>

        <div class="input-field col s6">
          <select name="txtEstadoCivil" id="idEstadoCivil">
            <option value="S">Soltera/o</option>
            <option value="C">Casada/o</option>
            <option value="V">Viuda/o</option>
          </select>
          <label>Estado Civil</label>
        </div>
        
      </div>

      <button class="btn waves-effect waves-light purple darken-1" type="submit" name="btn" value="Registro">Registrar
        <i class="material-icons right">send</i>
      </button>

    </form>

  </div>

    <hr>

    <h2>Consultas</h2>

    <div class="row">

      <form <?php $_SERVER['PHP_SELF'] ?> method="POST" class= "col s6">
        <input type="submit" value="Total de empleados femeninos" name="B1" class="waves-effect waves-light btn purple darken-1">
        <input type="number" readonly value="<?php echo $TOT1; ?>"><br>
      </form>
      
      <form <?php $_SERVER['PHP_SELF'] ?> method="POST" class= "col s6">
        <input type="submit" value="Total de mujeres viudas que ganan más de 1000Bs" name="B3" class="waves-effect waves-light btn purple darken-1">
        <input type="number" readonly value="<?php echo $TOT3; ?>"><br>
      </form>
    </div>

    <div class="row">
      
      <form <?php $_SERVER['PHP_SELF'] ?> method="POST" class= "col s6">
        <input type="submit" value="Total de hombres casados que ganan más de 2500Bs" name="B2" class="waves-effect waves-light btn purple darken-1" style="color: white; ">
        <input type="number" readonly value="<?php echo $TOT2; ?>"><br>
      </form>
      
      <form <?php $_SERVER['PHP_SELF'] ?> method="POST" class= "col s6">
        <input type="submit" value="Edad promedio de los hombres" name="B4" class="waves-effect waves-light btn purple darken-1">
        <input type="number" readonly value="<?php echo $TOT4; ?>"><br>
      </form>

    </div>


    <div class="footer">
        <h5>&copy; Todos los derechos reservados.<br> BEENATI <br> URBE 2023.</h5>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
      }); 
    </script>

</body>
</html>