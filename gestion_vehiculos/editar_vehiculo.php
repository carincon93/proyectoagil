<?php 
    require "../public/header.php";
    require "../public/seguridad1.php";
?>
  <style>
        input[type=number]::-webkit-outer-spin-button, input[type=number]::-webkit-inner-spin-button{
            -webkit-appearance:none;
        }
        body{
          background: url("../public/imgs/Fondo-Gris.jpg");
        }
        nav{
            height: 36px;
            width: 100%;
            background-color: white;
        }
        .container{
          width: 300px;
        }
        .dropdown{
           margin-left: 1190px; 
        }
        h1{
          color: #151414;
        }
        li{
            display: inline-block;
            list-style: none;
        }
        label{
          color: #151414;
          font-size: 15px;
        }
        .select{
          margin: 5px;
        }
        .img{
          position: absolute;
          left: 300px;
          bottom: 250px;
        }
        form{
          width: 295px;
        }
        .form-control{
          width: 97%;
        }
    </style>
</head>
<body>
  <?php 
    $con=mysqli_connect('localhost','root','','proyect');
    if ($_GET) {
      $id=$_GET['id'];
      $query=mysqli_query($con,"SELECT * FROM environments WHERE id_environment=$id");
      $row=mysqli_fetch_array($query);
    }
  ?>
  <nav>
    <div class="dropdown">
      <button class="glyphicon glyphicon-user btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <li><?php echo $_SESSION['name']; ?></li>
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
       <li><a class="off" href="../sing_off.php">sing off</a></li>
      </ul>
    </div>
  </nav>
    <div class="container col-md-offset-5">
    <form method="POST">
      <h1>Edit environment</h1>
      <hr>
      <label><em><ins>Environment Name</ins></em></label>
      <input type="text" name="environment_name"  class="form-control" value="<?php echo $row['environment_name']; ?>" required>
      <label><em><ins>State Environment:</ins></em></label>
      <select  class="btn btn-default select"  name="state_environment" >    
        <option <?php if ($row['state_environment'] == "free") echo "selected"; ?> value="free">free</option>
        <option <?php if ($row['state_environment'] == "ocuppied") echo "selected"; ?> value="ocuppied">ocuppied</option>
      </select>
      <label ><em><ins>Assigned Instructor</ins></em></label>
      <input type="text" name="assigned_instructor" class="form-control" value="<?php echo $row['assigned_instructor']; ?>" required>
      <label><em><ins>Assigned file</ins></em></label>
      <input type="number" name="assigned_file" class="form-control" value="<?php echo $row['assigned_file']; ?>" required>
      <label><em><ins>Apprentices Number</ins></em></label>
      <input type="number" name="apprentices_number" class="form-control" value="<?php echo $row['apprentices_number']; ?>" required>
      <label><em><ins>Formation Center</ins></em></label>
      <input type="text" name="formation_center" class="form-control" value="<?php echo $row['formation_center']; ?>" required>
      <label><em><ins>Department:</ins></em></label>
      <select class="btn btn-default select" name="department" >    
        <option <?php if ($row['department'] == "cundinamarca") echo "selected"; ?> value="cundinamarca">cundinamarca</option>
        <option <?php if ($row['department'] == "caldas") echo "selected"; ?> value="caldas">caldas</option>
        <option <?php if ($row['department'] == "antioquia") echo "selected"; ?> value="antioquia">antioquia</option>
        <option <?php if ($row['department'] == "risaralda") echo "selected"; ?> value="risaralda">risaralda</option>
        <option <?php if ($row['department'] == "magdalena") echo "selected"; ?> value="magdalena">magdalena</option>
      </select>
      <br>
      <label><em><ins>City:</ins></em></label>
      <select class="btn btn-default select" name="city" >   
        <option <?php if ($row['city'] == "manizales") echo "selected"; ?> value="manizales">manizales</option>
        <option <?php if ($row['city'] == "medellin") echo "selected"; ?> value="medellin">medellin</option>
        <option <?php if ($row['city'] == "bogota") echo "selected"; ?> value="bogota">bogota</option>
        <option <?php if ($row['city'] == "pereira") echo "selected"; ?> value="pereira">pereira</option>
        <option <?php if ($row['city'] == "santa marta") echo "selected"; ?> value="santa marta">santa marta</option>
      </select>
      <br>
      <input class="btn btn-success select" type="submit" value="send">
      <input class="btn btn-info select" type="reset" value="reset">
    </form>
  </div>
  <div class="img">
      <a href="environment.php"><img src="../public/imgs/return.jpg"></a>
  </div>
  <?php 
        if ($_POST) {
            $environment_name = $_POST["environment_name"];
            $state_environment = $_POST["state_environment"];
            $assigned_instructor = $_POST["assigned_instructor"];
            $assigned_file = $_POST["assigned_file"];
            $apprentices_number = $_POST["apprentices_number"];
            $formation_center = $_POST["formation_center"];
            $department = $_POST["department"];
            $city = $_POST["city"];
             if ($environment_name != "" && $state_environment != "" && $assigned_instructor != "" && $assigned_file != "" && $apprentices_number != "" && $formation_center != "" && $department != "" && $city != "") {
              $con = mysqli_connect('localhost','root','','proyect');
              $query="UPDATE environments SET environment_name='$environment_name', state_environment='$state_environment', assigned_instructor='$assigned_instructor', assigned_file='$assigned_file', apprentices_number='$apprentices_number', formation_center='$formation_center', department='$department', city='$city' WHERE id_environment = $id";
              $row=mysqli_query($con,$query);
              if($row) {
                  echo "<script>alert('Data updated successfully ...');</script>";
          }
          else{
          echo "<script>alert('no conect')<script>";
        }
        }
      }
    ?>
<?php require "../public/footer.php" ?>
