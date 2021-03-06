<?php 
    $page = "ford"; 
    include '../php/conexion.php';
    $sql = mysqli_query($con, "SELECT * FROM vehiculos WHERE marca = 'ford' ");
    include '../layouts/header-user.php';
    include '../layouts/navbar-user.php' 
?>
    <div class="content">
        <div class="container">
            <ul class="row">
                <?php while ($row = mysqli_fetch_array($sql)): ?>
                <li class="col-md-4 col-sm-10 offset-sm-1">
                    <div class="vehicle-card">
                        <div class="card-title">
                            <h1 class="marca-title"><?= $row['marca'] ?></h1>
                            <h2 class="modelo-title"><?= $row['linea'] ?></h2>
                        </div>
                        <div>
                            <div class="img-card">
                                <img src="../imgs/<?= $row['imagen'] ?>" width="100%">
                            </div>
                            <p class="card-description"><?= $row['descripcion']  ?></p>
                            <p class="precio"><span>Desde </span>$<?= $row['precio'] ?> COP</p>
                            <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="business" value="payments@yoursite.com">
                                <input type="hidden" name="item_name" value="<?= $row['marca']." ".$row['linea'] ?>">
                                <input type="hidden" name="item_number" value="<?= $row['id_vehiculo'] ?>">
                                <input type="hidden" name="amount" value="<?= $row['precio'] ?>">
                                <input type="hidden" name="currency_code" value="COP">
                                <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.htm">
                                <input type="hidden" name="undefined_quantity" value="1">
                                <input type="hidden" name="lc" value="HN">
                                <input type="submit" class="cart" name="submit" value="Añadir al carrito">                          
                            </form>
                        </div>
                    </div>                    
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
<?php include '../layouts/footer.php'; ?>