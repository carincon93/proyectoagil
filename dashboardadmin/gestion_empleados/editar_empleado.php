<?php 
    session_start();
    $page = 'gestionar_empleados';
    include "../../php/conexion.php";
    if ($_GET) {
        $id   = $_GET['id'];
        $sql  = mysqli_query($con,"SELECT * FROM empleados WHERE id_empleado = $id");
        $row  = mysqli_fetch_array($sql);
    }
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
        
        $sql = "UPDATE empleados SET imagen = '$imagen', nombre = '$nombre', apellido1 = '$apellido1', apellido2 = '$apellido2', sexo = '$sexo', telefono = '$telefono', tipo_documento = '$tipo_documento', numero_documento = '$numero_documento', correo = '$correo', contrasena = '$contrasena', cargo = '$cargo' WHERE id_empleado = $id";

        if (mysqli_query($con, $sql)) {
            $_SESSION['action'] = 'edit';
            header("location:empleados.php");
            exit();
        } else {
            echo "<script>alert('Error al realizar la consulta!')</script>";       
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
        <form method="POST" class="form-group" enctype="multipart/form-data">
        <h1>Editar Empleado</h1>
        <hr>
        <div class="form-group">
                <img id="avatar" src="../../imgs/<?php echo $row['imagen']; ?>">
                <button class="btn btn-default btn-upload" type="button">
                  <i class=""></i>Cargar foto
                </button>
                <input type="file" id="upload" name="imagen" accept="image/*" style="display: none">
        </div>
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
          <option <?php if ($row['tipo_documento'] == "C.E") echo "selected"; ?> value="C.E">C.E</option>
        </select>
        <label>Número de documento</label>
        <input type="number" name="numero_documento" class="form-control" value="<?php echo $row['numero_documento']; ?>">   
        <label>Correo</label>
        <input type="correo" name="correo" class="form-control" value="<?php echo $row['correo']; ?>" >
        <label>Contraseña</label>
        <input type="password" class="form-control" value="<?php echo $row['contrasena']; ?>" name="contrasena">
        <label>Cargo</label>
        <input type="text" name="cargo" class="form-control" value="<?php echo $row['cargo']; ?>">
        <br>
        <input class="btn btn-success input-edit" type="submit" value="Editar">
        <a class="btn btn-primary" href="empleados.php">Volver</a>
      </form>
    </div>
  </div>
<?php include '../../layouts/footer.php' ?>