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
        li{
            display: inline-block;
            list-style: none;
        }
        h1{
          color: #151414;
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
      <h1>new environment</h1>
      <hr>
      <label><em><ins>Environment Name</ins></em></label>
      <input type="text" name="environment_name" class="form-control" required>
      <label><em><ins>State Environment:</ins></em></label>
      <select class="btn btn-default select" name="state_environment" >    
        <option>select state....</option>
        <option value="free">free</option>
        <option value="ocuppied">ocuppied</option>
      </select>
      <label ><em><ins>Assigned Instructor</ins></em></label>
      <input type="text" name="assigned_instructor" class="form-control" required>
      <label><em><ins>Assigned file</ins></em></label>
      <input type="number" name="assigned_file" class="form-control" required>
      <label><em><ins>Apprentices Number</ins></em></label>
      <input type="number" name="apprentices_number" class="form-control" required>
      <label><em><ins>Formation Center</ins></em></label>
      <input type="text" name="formation_center" class="form-control" required>
      <label><em><ins>Department:</ins></em></label>
      <select class="btn btn-default select" name="department" >    
        <option>select department....</option>
        <option value="cundinamarca">cundinamarca</option>
        <option value="caldas">caldas</option>
        <option value="antioquia">antioquia</option>
        <option value="risaralda">risaralda</option>
        <option value="magdalena">magdalena</option>
      </select>
      <label><em><ins>City:</ins></em></label>
      <select class="btn btn-default select" name="city" >   
        <option>select city....</option>
        <option value="manizales">manizales</option>
        <option value="medellin">medellin</option>
        <option value="bogota">bogota</option>
        <option value="pereira">pereira</option>
        <option value="santa marta">santa marta</option>
      </select>
      <br><br>
      <input class="btn btn-success" type="submit" value="send">
      <input class="btn btn-info" type="reset" value="reset">
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

                $con  = mysqli_connect('localhost','root','','proyect');
                $query ="INSERT INTO environments VALUES('','$environment_name','$state_environment','$assigned_instructor','$assigned_file','$apprentices_number','$formation_center','$department','$city')";
                  $row=mysqli_query($con,$query);
                if ($row) {
                    echo "<script>alert('User registered successfully....');</script>";
                

            } else{
                echo "<script>alert('There are empty fields, I remember filling out the entire form ...')</script>";
            }
            }
        }
    ?>
<?php require "../public/footer.php" ?>
