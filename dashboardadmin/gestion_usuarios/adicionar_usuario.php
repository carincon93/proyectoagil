<?php 
  $page = 'gestionar_usuarios';
  require "../../layouts/conexion.php";
    if ($_POST) {
      $nombre =$_POST["nombre"];
      $apellido1 = $_POST["apellido1"];
      $apellido2 = $_POST["apellido2"];
      $sexo = $_POST["sexo"];
      $telefono = $_POST["telefono"];
      $tipo_documento = $_POST["tipo_documento"];
      $numero_documento = $_POST["numero_documento"];
      $correo = $_POST["correo"];
      $contrasena = $_POST["contrasena"];

      if ($nombre !='' && $apellido1 !='' && $apellido2 !='' && $sexo !='' && $telefono !='' && $tipo_documento !='' && $numero_documento !='' && $correo !='' && $contrasena !='') {
      
        $query = "INSERT INTO registro_tbl VALUES (default, '$nombre', '$apellido1', '$apellido2', '$sexo', '$telefono', '$tipo_documento', '$numero_documento', '$correo', '$contrasena')";

        $row = mysqli_query($con,$query);
        if ($row) {
            echo "<script>
                    alert('Usuario registrado con exito!');
                    window.location.replace('usuarios.php');
                  </script>";
        } else {
            echo "<script>alert('Error al realizar la consulta!');</script>";
        }
      }
    }
  include '../../layouts/header.php';
  include '../../layouts/navbar.php' 
?>
  <div class="content">
    <div class="container">
      <form method="POST" class="form-group">
        <h1>Adicionar usuario</h1>
        <hr>
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
        <label>Primer apellido</label>
        <input type="text" name="apellido1" class="form-control" required>    
        <label>Segundo apellido</label>
        <input type="text" name="apellido2" class="form-control" >        
        <label>Sexo</label>
        <select name="sexo" class="form-control">
          <option value>Seleccione tipo de sexo</option>
          <option value="M">Masculino</option>
          <option value="F">Femenino</option>
        </select>
        <label>Telefono</label>
        <input type="number" name="telefono" class="form-control" required>
        <label>Tipo de Documento</label>
        <select name="tipo_documento" class="form-control">
          <option value>Seleccione tipo de documento</option>
          <option value="C.C">C.C</option>
          <option value="T.I">T.I</option>
        </select>
        <label>Número de documento</label>
        <input type="number" name="numero_documento" class="form-control" required>   
        <label>Correo</label>
        <input type="correo" name="correo" class="form-control" required>
        <label>Contraseña</label>
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-info">Borrar</button>
        <button type="button" class="btn"><a href="usuarios.php">Volver</a></button>
      </form>
    </div>
  </div>
<?php include '../../layouts/footer.php' ?>