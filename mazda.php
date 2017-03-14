<?php $page = "mazda"; ?>
<?php include 'layouts/header.php'; ?>
<?php include 'layouts/navbar.php' ?>
    <div class="content">
        <div>
            <ul>
                <li class="col-md-4 offset-md-1 col-sm-6 offset-sm-3 col-10 offset-1">
                    <div class="vehicle-card">
                        <h1 class="card-title">Mazda CX-5</h1>
                        <figure class="car1 img-container"></figure>
                        <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia recusandae deserunt enim, eos quas eum ea molestias, similique suscipit. Inventore blanditiis magni fugit molestiae.</p>
                        <div class="actions">
                            <button type="button" class="btn btn-primary icon-cart" data-toggle="modal" data-target="#myModal"></button>
                                <button><a href="" class="icon-search"></a></button>
                        </div>
                    </div>
                </li>
                <li class="col-md-4 offset-md-2 col-sm-6 offset-sm-3 col-10 offset-1">
                    <div class="vehicle-card">
                        <h1 class="card-title">Mazda CX-3</h1>
                        <figure class="car2 img-container"></figure>
                        <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia recusandae deserunt enim, eos quas eum ea molestias, similique suscipit. Inventore blanditiis magni fugit molestiae.</p>
                        <div class="actions">
                            <button type="button" class="btn btn-primary icon-cart" data-toggle="modal" data-target="#myModal"></button>
                            <button><a href="" class="icon-search"></a></button>
                        </div>
                        
                    </div>
                </li>
            </ul>
        </div>        
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table>
                <thead>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Precio</th>
                </thead>
                <tbody>
                    <tr>
                        <td>CX-3</td>
                        <td>2017</td>
                        <td id=""><?= $vehiculo['precio'] ?></td>
                    </tr>
                </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
<?php include 'layouts/footer.php'; ?>