<?php
include 'phpfunction/myfunction.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title></title>
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
<div class="card" style="width: 18rem;">
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
</div>
		
</body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
<script>
    window.setTimeout(function() {
    $(".alert").fadeTo(200, 0) 
}, 2000);
  </script>