<?php 
    //Si la variable sesión está vacía
    if (!isset($_SESSION['empleado'])) 
    {
       /* nos envía a la siguiente dirección en el caso de no poseer autorización */
       header("location:../login.php");
       exit();
    }
?>
<?php $base_url="http://localhost/proyectoagil"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/master.css">
  </head>
  <body>
    <div class="container-page">