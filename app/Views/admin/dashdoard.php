<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quản Lí Sản Phẩm</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="../app/public/source/admin/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../app/public/source/admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../app/public/source/admin/css/custom.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
  </head>
  <body>
    <!-- Side Navbar -->
    <?php include('modules/sidemenu.php') ?>
    <div class="page home-page">
        <?php include('modules/header.php') ?>
        <?php include($this->partial) ?>
        <?php include('modules/footer.php') ?>
    </div>
    <!-- Javascript files-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="../app/public/source/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../app/public/source/admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../app/public/source/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../app/public/source/admin/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="../app/public/source/admin/js/front.js"></script>
    <script type="text/javascript" src="../app/public/source/admin/plugin/tinymce/tinymce.min.js "></script>
    <script type="text/javascript" src="../app/public/source/admin/plugin/tinymce/init-tinymce.js"></script>
  
  

    <script>
        $("#featureImage").on('change',function () {
            filePreview(this);
        });
        function filePreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#featureImage + img').remove();
                    $('#featureImage').after('<img src="'+e.target.result+'" width="150">');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
  </body>
</html>