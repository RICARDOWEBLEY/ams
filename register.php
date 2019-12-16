<?php 
    require_once 'inc/auth.php';
    require_once 'inc/sessions.php';
    $title= "Regrister";
?>

<!DOCTYPE html>
<html>
<head>
<?php require_once 'inc/header.php'; ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smart AMS | <?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index.php" class="text-primary"><b>Smart AMS</b>&nbsp;<?php echo $title; ?></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <h4 class="login-box-msg text-primary">Register a new User</h4>

      <form action="success.php" method="post">

          <label for="firstname">Firstname:</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Firstname" name="firstname"  id="firstname" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <label for="lastname">Lastname:</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Lastname" name="lastname" id="lastname" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <label for="email">Email:</label>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email"  name="email"  id="email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <label for="username">Username:</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <label for="password">Password:</label>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              
              
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
  
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
