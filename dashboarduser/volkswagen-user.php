<?php $page = "volkswagen"; ?>
<?php include '../layouts/conexion.php' ?>
<?php 
    $query = mysqli_query($con, "SELECT * FROM gestion_vehiculos_tbl WHERE marca = 'volkswagen' ");
?>
<?php include '../layouts/header.php'; ?>
<?php include '../layouts/navbar-user.php' ?>
    <div class="content">
        <div>
            <ul>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                <li class="col-md-4 offset-md-1 col-sm-6 offset-sm-3 col-10 offset-1 vehicle-card">
                    <div class="card-title">
                        <h1 class="marca-title"><?= $row['marca'] ?></h1>
                        <h2 class="modelo-title"><?= $row['linea'] ?></h2>
                    </div>
                    <div>
                        <div class="img-card">
                            <img src="../imgs/<?= $row['imagen'] ?>" width="100%">
                        </div>
                        <p class="card-description"><?= $row['descripcion']  ?></p>
                        <div class="actions">
                                <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="business" value="payments@yoursite.com">
                                    <input type="hidden" name="item_name" value="<?= $row['marca']." ".$row['linea'] ?>">
                                    <input type="hidden" name="item_number" value="<?= $row['id_vehiculos'] ?>">
                                    <input type="hidden" name="amount" value="<?= $row['precio'] ?>">
                                    <input type="hidden" name="currency_code" value="COP">
                                    <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.htm">
                                    <input type="hidden" name="undefined_quantity" value="1">
                                    <input type="hidden" name="lc" value="HN">
                                    <input type="image" src="http://www.paypalobjects.com/es_XC/i/btn/x-click-but22.gif" border="0" name="submit" width="87" height="23" alt="Realice pagos con PayPal: es rápido, gratis y seguro.">
                                </form>
                        </div>
                    </div>
                </li>
                <?php endwhile ?>                
            </ul>
        </div>        
    </div>
<?php include '../layouts/footer.php'; ?>