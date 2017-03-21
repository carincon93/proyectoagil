<?php 
    $page = 'gestionar_usuarios';
    require "../../layouts/conexion.php";
    include '../../layouts/header.php';
    if ($_GET) {
        $id=$_GET['id'];
        $query=mysqli_query($con,"SELECT * FROM registro_tbl WHERE id_registro=$id");
        $row=mysqli_fetch_array($query);
    }
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
        
        $query = "UPDATE registro_tbl SET nombre = '$nombre', apellido1 = '$apellido1', apellido2 = '$apellido2', sexo = '$sexo', telefono = '$telefono', tipo_documento = '$tipo_documento', numero_documento = '$numero_documento', correo = '$correo', contrasena = '$contrasena' WHERE id_registro = $id";

        $row = mysqli_query($con,$query);
        if ($row) {
            echo "<script>
                        alert('Usuario modificado con exito!');
                        windows.location.replace(usuarios.php);
                </script>";
        } else {
            echo "<script>alert('Error al realizar la consulta!')</script>";       
        }
    
    }
?>
<?php include '../../layouts/navbar.php' ?>
    <div class="content">
      <div class="container">
        <form method="POST" class="form-group">
        <h1>Editar usuario</h1>
        <hr>
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>">
        <label>Primer apellido</label>
        <input type="text" name="apellido1" class="form-control" value="<?php echo $row['apellido1']; ?>">    
        <label>Segundo apellido</label>
        <input type="text" name="apellido2" class="form-control" value="<?php echo $row['apellido2']; ?>" >        
        <label>Sexo</label>
        <select name="sexo" class="form-control">
          <option <?php if ($row['sexo'] == "F") echo "selected"; ?> value="F">Femenino</option>
          <option <?php if ($row['sexo'] == "M") echo "selected"; ?> value="M">Masculino</option>
        </select>
        <label>Telefono</label>
        <input type="number" name="telefono" class="form-control" value="<?php echo $row['telefono']; ?>">
        <label>Tipo de Documento</label>
        <select name="tipo_documento" class="form-control">
          <option <?php if ($row['tipo_documento'] == "C.C") echo "selected"; ?>  value="C.C">C.C</option>
          <option <?php if ($row['tipo_documento'] == "T.I") echo "selected"; ?> value="T.I">T.I</option>
        </select>
        <label>Número de documento</label>
        <input type="number" name="numero_documento" class="form-control" value="<?php echo $row['numero_documento']; ?>">   
        <label>Correo</label>
        <input type="correo" name="correo" class="form-control" value="<?php echo $row['correo']; ?>" >
        <label>Contraseña</label>
        <input type="password" class="form-control" value="<?php echo $row['contrasena']; ?>" name="contrasena">
        <input type="submit" class="btn btn-success" value="Enviar">
        <a class="btn btn-primary" href="usuarios.php">Volver</a>
      </form>
    </div>
  </div>
<?php include '../../layouts/footer.php' ?>