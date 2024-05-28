<?php if(isset($log_r)) echo '<script>window.location.replace("'.base_url().'/Backend/Dashboard");</script>'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SavingAlert | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/backend/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/backend/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/backend/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url(); ?>"><b>SavingAlert</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to manage the system</p>

      <form action="<?php echo base_url(); ?>/Backend/Login" method="post">
        <div class="input-group mb-3">
          <input type="email" value="<?= set_value("email_sh") ?>" class="form-control" name="email_sh" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password_sh" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
          </div>
          <!-- /.col -->
        </div>

        <?php if(isset($validation)) : ?>
          <div class="row">
            <div class="text-danger">
              <?= $validation->listErrors() ?> 
            </div>
          </div>
        <?php endif; ?>

      <div class="social-auth-links text-center mb-3">
        <!-- <p>- OR -</p> -->

		<button type="submit" class="btn btn-primary btn-block">Sign In</button>

      </div>
      <!-- /.social-auth-links -->

	  </form>

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>/backend/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/backend/assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>/backend/assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>

<?php 

  if(isset($swalfire)){
    echo "
    <script>

      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Email or Password Wrong!'
      })
    
    </script>
    ";
  }

?>

</body>
</html>
