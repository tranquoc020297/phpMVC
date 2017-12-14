<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../../app/public/source/admin/css/style.default.css" id="theme-stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
  </head>
  <body>
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Đăng Nhập</span><strong class="text-primary">Quản Trị</strong></div>
            <form id="login-form" method="post">
              <div class="form-group">
                <label for="login-username" class="label-custom">User Name</label>
                <input id="login-username" type="text" name="loginUsername" required="">
              </div>
              <div class="form-group">
                <label for="login-password" class="label-custom">Password</label>
                <input id="login-password" type="password" name="loginPassword" required="">
              </div><a id="login" href="index" class="btn btn-primary">Login</a>
              <!-- This should be submit button but I replaced it with <a> for demo purposes-->
            </form><a href="#" class="forgot-pass">Forgot Password?</a>
          </div>
          <div class="copyrights text-center">
            <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="../../app/public/source/admin/js/front.js"></script>
    <script src="../../app/public/source/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
  </body>
</html>