<?php 
	$page = "contactanos"; 
	session_start();
	$base_url="http://localhost/proyectoagil";
?>
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
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/owl.carousel.min.css">
  </head>
  <body>
    <div class="container-page">	
	<?php include 'layouts/navbar-user.php'; ?>
	
		<div class="container">
			<section class="owl-carousel owl-theme">
				<img src="imgs/galeria2.jpg" alt="">
				<img src="imgs/galeria3.jpg" alt="">
				<img src="imgs/galeria4.jpg" alt="">
				<img src="imgs/galeria8.jpg" alt="">
				<img src="imgs/galeria9.jpg" alt="">
			</section>
		
			<section class="descrip">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat sequi velit ipsum deserunt modi, accusamus assumenda culpa, reprehenderit ducimus nesciunt alias? Tempore voluptas sed eligendi ipsum fuga explicabo, id amet possimus, illo, libero ea deserunt. Omnis aperiam, quibusdam dolor nobis quidem quos soluta reprehenderit, sunt est eos, ratione quis. Quis!</p>
			</section>
        </div>
<?php require "layouts/footer.php"; ?> 