<?php 
  include 'conexion.php';
  //Recibimos las dos variables
  $correo   = $_POST["correo"];
  $contrasena = $_POST["contrasena"];
   
  /* Realizamos una consulta por cada tabla para buscar en que tabla se encuentra 
  el usuario que está intentando acceder */
  $administrador = mysqli_query($con, "SELECT * FROM administradores WHERE correo = '$correo' AND contrasena = '$contrasena'");
  $empleado      = mysqli_query($con, "SELECT * FROM empleados WHERE correo = '$correo' AND contrasena = '$contrasena'");
  $cliente       = mysqli_query($con, "SELECT * FROM clientes WHERE correo = '$correo' AND contrasena = '$contrasena'");
   
  /* Sabemos que en el caso que exista el usuario se encontrará en una de estas 
  tres tablas, por lo tanto se guardará en alguno de nuestras tres variables 
  que guardan nuestra consulta */
   
  /* Ahora comprobamos que variable contiene al usuario*/
  if(mysqli_num_rows($administrador) > 0) 
  {
      /* Si entra en este if significa que el que intenta acceder es un administrador, 
      por lo tanto le creamos una sesión */
      session_start();
   
      $_SESSION['administrador'] = "$correo";
   
      /* Nos dirigimos al espacio de los administradors usando header que nos 
      redireccionará a la página que le indiquemos */
      header("Location: ../dashboardadmin/index.php");
   
      /* terminamos la ejecución ya que si redireccionamos ya no nos interesa 
      seguir ejecutando código de este archivo */
      exit(); 
  }
   
  /* Ahora comprobamos si el que intenta acceder es un empleado */
  else if(mysqli_num_rows($empleado) > 0) 
  {
      session_start();
      $_SESSION['empleado'] = "$correo";
      header("Location: ../dashboardempleado/index.php");
      exit(); 
  }
   
  //comprobamos si es un cliente el que intenta abrir la sesión
  else if(mysqli_num_rows($cliente) > 0) 
  {
      session_start();
      $_SESSION['cliente'] = "$correo";
      header("Location: ../dashboarduser/index.php");
      exit();
  } 
  else 
  {
    //Si el usuario no se encuentra en ninguna de las tres tablas imprime el siguiente mensaje
    $mensajeaccesoincorrecto = "El usuario y la contraseña son incorrectos, por favor vuelva a introducirlos.";
    echo $mensajeaccesoincorrecto; 
  }
?>