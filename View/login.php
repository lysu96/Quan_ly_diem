<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Đăng nhập</title>

  <!-- Custom fonts for this template-->
  <link href="bootstraps/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="bootstraps/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Đăng nhập</div>
      <div class="card-body">
        <form action="index.php?controllers=login&action=Admin" method="POST">
          <div class="form-group">
            <?php if (isset(($thatbai))) {
              echo($thatbai);
            } ?>
            <div class="form-label-group">
              <input type="text" name="username" id="inputtext" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
              <label for="inputEmail">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Ghi nhớ mật khẩu
              </label>
            </div>
          </div>
          <input type="submit" name="login" class="btn btn-primary btn-block" value="Đăng nhập">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="index.php?controllers=login&action=damg_ky">Đăng ký tài khoản</a>
          <a class="d-block small" href="index.php?controllers=login&action=quen_mk">Quên mật khẩu?</a>
        </div>
      </div>
    </div>
  </div>

</body>
<!-- Bootstrap core JavaScript-->
<script src="bootstraps/vendor/jquery/jquery.min.js"></script>
<script src="bootstraps/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="bootstraps/vendor/jquery-easing/jquery.easing.min.js"></script>
</html>