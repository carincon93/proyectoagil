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
  </head>
  <body>
    <div class="container-page">
    	<div class="container-fluid">
            <div class="container-fluid">
                <div class="content">    
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                          <img class="d-block img-fluid" src="imgs/galeria3.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block img-fluid" src="imgs/galeria2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block img-fluid" src="imgs/galeria4.jpg" alt="Third slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
    	</div>
<?php include 'layouts/footer.php' ?>