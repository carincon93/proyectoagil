<?php $page = "ford"; ?>
<?php include 'layouts/header.php'; ?>
<?php include 'layouts/navbar.php' ?>
    <div class="content">
        <div class="container">
            <ul class="row">
                <li class="col-md-4 offset-md-1 col-sm-6 offset-sm-3 col-10 offset-1">
                    <div class="vehicle-card">
                        <h1 class="card-title">Ford Fusion</h1>
                        <figure class="car3 img-container"></figure>
                        <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia recusandae deserunt enim, eos quas eum ea molestias, similique suscipit. Inventore blanditiis magni fugit molestiae.</p>
                        <div class="actions">
                            <button><a href="" class="icon-cart"></a></button>
                            <button><a href="gestion_vehiculos/consultar_vehiculo.php?id=3" class="icon-search"></a></button>
                        </div>
                    </div>
                </li>
                <li class="col-md-4 offset-md-2 col-sm-6 offset-sm-3 col-10 offset-1">
                    <div class="vehicle-card">
                        <h1 class="card-title">Ford Taurus</h1>
                        <figure class="car4 img-container"></figure>
                        <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia recusandae deserunt enim, eos quas eum ea molestias, similique suscipit. Inventore blanditiis magni fugit molestiae.</p>
                        <div class="actions">
                            <button><a href="" class="icon-cart"></a></button>
                            <button><a href="gestion_vehiculos/consultar_vehiculo.php?id=4" class="icon-search"></a></button>
                        </div>
                        
                    </div>
                </li>
            </ul>
        </div>
        
    </div>
<?php include 'layouts/footer.php'; ?>