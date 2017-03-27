<?php
  session_start();
  $page = 'gestionar_empleados';
  require "../../php/conexion.php";
  if ($_POST) {
    $imagen = $_FILES['imagen']['name'];
    $nombre =$_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $sexo = $_POST["sexo"];
    $telefono = $_POST["telefono"];
    $tipo_documento = $_POST["tipo_documento"];
    $numero_documento = $_POST["numero_documento"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $cargo = $_POST["cargo"];

    if ($nombre != '' && $apellido1 != '' && $sexo != '' && $telefono != '' && $tipo_documento != '' && $numero_documento != '' && $correo != '' && $contrasena != '' && $cargo != '') {
    
      $sql = "INSERT INTO empleados VALUES (DEFAULT, '$imagen', '$nombre', '$apellido1', '$apellido2', '$sexo', '$telefono', '$tipo_documento', '$numero_documento', '$correo', '$contrasena', '$cargo')";

      if (mysqli_query($con, $sql)) {
        $_SESSION['action'] = 'add';
        header("location:empleados.php");
        exit();
      } else {
          echo "<script>alert('Error al realizar la consulta!');</script>";
      }
    }
    if ($_FILES) {
        if ($_FILES['imagen']['type'] == 'imagen/png') {
       
          if ($_FILES['imagen']['error'] > 0) {
            echo "Error: ".$_FILES['imagen']['error'];
          } else {
            move_uploaded_file($_FILES['imagen']['tmp_name'], 'imgs/' . $_FILES['imagen']['name']);
          }
        } else {
          echo "Error: La imagen no es png!";
        }
      }
  }
  include '../../layouts/header.php';
  include '../../layouts/navbar.php';
?>
  <div class="content">
    <div class="container">
      <form method="POST" id="add" enctype="multipart/form-data">
        <h1>Adicionar Empleado</h1>
        <hr>
        <div class="form-group">
                <img id="avatar" src="../../imgs/avatar.png">
                <button class="btn btn-default btn-upload" type="button">
                  <i class=""></i>Cargar foto
                </button>
                <input type="file" id="upload" name="imagen" accept="image/*" style="display: none">
        </div>
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
          <label for="">Teléfono</label>
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
        <div>
          <label for="">Cargo</label>
          <input type="text" name="cargo" class="form-control" data-validation="required">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-info">Borrar</button>
        <a class="btn btn-primary" href="empleados.php">Volver</a>
      </form>
    </div>
  </div>
<?php include '../../layouts/footer.php' ?>