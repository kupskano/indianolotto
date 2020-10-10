<?php
include 'phpfunction/myfunction.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
	  <?php
                  if(isset($_GET['success'])){

                    $cec = $_GET['success'];
                    if($cec == 'inserted'){
                      echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
              <strong>Registered Successfully!</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
                    }
                  }
                ?>
                    <?php
                  if(isset($_GET['error'])){

                    $cec = $_GET['error'];
                    if($cec == 'usertaken'){
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Username is taken!</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
                    }
                  }
                ?>

<br>
<br>
<br>
<br>

<div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Register Here</p>

     <form method="post" action="phpfunction/myfunction.php">
      	<div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email e.g example@gmail.com" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="contact_number" placeholder="Contact Number" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-number"></span>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="icheck-primary">
              <label for="remember">
                Already have an account? <a href="login.php">Login</a>
              </label>
          </div>
          <br>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="register_submit" class="btn btn-primary btn-block">Sign Up</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

     
    </div>
  </div>

<!-- <div class="card" style="width: 18rem;">
  <div class="card-body">
    	<form method="post" action="phpfunction/myfunction.php">
	<input type="text" name="username" class="form-control" placeholder="Username" required="">
	<br>
	<input type="password" name="password"  class="form-control" placeholder="Password" required="">
	<br>
	<input type="email" name="email"  class="form-control" placeholder="Email  - e.g example@gmail.com" required="">
	<br>
	<input type="text" name="contact_number"   class="form-control" placeholder="Contact Number" required="">
	<br>
	<a href="login.php">Already have an account? Login</a>
	<br>
	<button type="submti" name="register_submit" class="btn btn-info">Register</button>
</form>

  </div>
</div> -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
<script>
    window.setTimeout(function() {
    $(".alert").fadeTo(200, 0) 
}, 2000);
  </script>