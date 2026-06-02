<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Lelang Online</title>

  <!-- Google Font: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #6dd5ed, #2193b0);
    }

    .login-box {
      margin-top: 80px;
    }

    .card {
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    .btn-block {
      border-radius: 30px;
      transition: all 0.3s ease-in-out;
    }

    .btn-block:hover {
      transform: scale(1.02);
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .login-logo a {
      font-weight: bold;
      font-size: 26px;
      color: #ffffff;
    }

    .login-card-body p {
      font-size: 16px;
      font-weight: 500;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Pancasakti</b></a>
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silakan login sebagai Admin atau Petugas</p>
      <hr>

      <?php
      if(isset($_GET['info'])){
        if($_GET['info'] == "gagal"){ ?>
          <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i> Mohon Maaf</h5>
            Login gagal! Username dan password salah!
          </div>
        <?php } else if($_GET['info'] == "logout"){ ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Terima Kasih</h5>
            Anda telah berhasil logout
          </div>
        <?php } else if($_GET['info'] == "login"){ ?>
          <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-info"></i> Mohon Maaf</h5>
            Anda harus login terlebih dahulu
          </div>
      <?php } } ?> 

      <form action="cek_login_petugas.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="social-auth-links text-center">
          <button type="submit" class="btn btn-info btn-block">Login Admin / Petugas</button>
          <a href="index.php" class="btn btn-secondary btn-block">Login Anggota</a>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>