<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Đăng ký</title>

  <!-- Custom fonts for this template-->
  <link href="bootstraps/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="bootstraps/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Đăng ký</div>
      <div class="card-body">
        <form action="#" method="POST">
          <div class="form-group">
            <?php if (isset($thatbai)) {
              echo $thatbai;
            } ?>
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" name="txtfirstName" class="form-control" placeholder="Họ" required="required" autofocus="autofocus">
                  <label for="firstName">Họ</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" name="txtlastName" class="form-control" placeholder="Tên đệm" required="required">
                  <label for="lastName">Tên đệm</label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputUsername" name="txtUsername" class="form-control" placeholder="Username" required="required">
              <label for="inputUsername">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="txtEmail" class="form-control" placeholder="Email" required="required">
              <label for="inputEmail">Email</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="txtPassword" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" name="txtCfPassword" class="form-control" placeholder="Nhập lại password" required="required">
                  <label for="confirmPassword">Nhập lại password</label>
                </div>
              </div>
            </div>
          </div>
          <input type="submit" name="Dangky" class="btn btn-primary btn-block" value="Đăng ký">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="index.php?controllers=login">Đăng nhập</a>
          <a class="d-block small" href="index.php?controllers=login&action=quen_mk">Quên mật khẩu?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="bootstraps/vendor/jquery/jquery.min.js"></script>
  <script src="bootstraps/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="bootstraps/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
