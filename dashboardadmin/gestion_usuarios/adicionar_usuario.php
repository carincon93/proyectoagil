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
      <form method="POST" id="add">
        <h1>Adicionar usuario</h1>
        <hr>
        <div>
          <label for="">Nombre</label>
          <input type="text" name="nombre" class="form-control" data-validation="length" data-validation-length="min4">
        </div>
        <div>
          <label for="">Primer apellido</label>
          <input type="text" name="apellido1" class="form-control" data-validation="length" data-validation-length="min4">  
        </div>
        
        <div>
          <label for="">Segundo apellido</label>
          <input type="text" name="apellido2" class="form-control">
        </div>  
        
        <div>
          <label for="">Sexo</label>
          <select name="sexo" class="form-control" data-validation="required">
            <option value>Seleccione..</option>
            <option value="F">Femenino</option>
            <option value="M">Masculino</option>
          </select>
        </div>
        
        <div>
          <label for="">Telefono</label>
          <input type="number" name="telefono" class="form-control" data-validation="length numeric" data-validation-length="min7">
        </div>
        <div>
          <label for="">Tipo de Documento</label>
          <select name="tipo_documento" class="form-control" data-validation="required">
            <option value>Seleccione..</option>
            <option value="C.C">C.C</option>
            <option value="C.E">C.E</option>
          </select>
        </div>
        
        <div>
          <label for="">Número de documento</label>
          <input type="number" name="numero_documento" class="form-control" data-validation="length number" data-validation-length="min10">   
        </div>
        <div>
          <label for="">Correo</label>
          <input type="email" name="correo" class="form-control" data-validation="email">
        </div>
        <div>
          <label for="">Contraseña</label>
          <input type="password" name="contrasena" class="form-control" data-validation="length" data-validation-length="min8">
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-info">Borrar</button>
        <a class="btn btn-primary" href="usuarios.php">Volver</a>
      </form>
    </div>
  </div>
<?php include '../../layouts/footer.php' ?>