<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
     <!-- Custom fonts for this template-->
     <link href="<?php echo ROOT_URL?>Public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo ROOT_URL?>Public/css/sb-admin-2.min.css" rel="stylesheet">

    </head>
    <body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                    <div class="col-lg-6 d-none d-lg-block">
  <img src="<?php echo ROOT_URL ?>/Public/uploads/coyta.jpg" alt="Login Image" style="width: 500px; height: 560px;">
</div>                       
 <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                            
        <form method="post" action="">
                        <input placeholder="Email..." class="form-control form-control-user" type="text" name="email" id="email" value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>"/>
                        <?php echo isset($error['email']) ? $error['email'] : ''; ?>
                
                        <input placeholder="Password..." class="form-control form-control-user" type="text" name="password" id="password" value="<?php echo isset($data['password']) ? $data['password'] : ''; ?>"/>
                        <?php echo isset($error['password']) ? $error['password'] : ''; ?>
                 
                
             
                
                   
            <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="xuly" value="Login Admin"/>
                                       
                                        <hr>
                                        <a href="index.php" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa- fa-fw"></i> Login User
                                        </a>
                                        <a href="https://www.facebook.com/?locale=vi_VN" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
        </form>
        <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
        <!-- Bootstrap core JavaScript-->
    <script src="<?php echo ROOT_URL?>Public/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo ROOT_URL?>Public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo ROOT_URL?>Public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo ROOT_URL?>Public/js/sb-admin-2.min.js"></script>
    </body>
</html>
<?php
        // Kiểm tra định dạng email
        function is_email($str) {
            return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
        }
        // Code PHP xử lý validate
        $error = array();
        $data = array();
        $email = "ntpccn@gmail.com";
        $password = 123;
        if (!empty($_POST['xuly']))
        {
            // Lấy dữ liệu
            $data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
            $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
 
            // Kiểm tra định dạng dữ liệu
            if (empty($data['email'])){
                $error['email'] = 'Chưa nhập email kìa ông nội';
                echo 'Chưa nhập email kìa ông nội <br>';
            }
            else if (!is_email($data['email'])){
                $error['email'] = 'Email không đúng định dạng';
                echo 'Email không đúng định dạng <br>';
            }
            if (empty($data['password'])){
                $error['password'] = 'Đó! lại còn quên nhập mật khẩu ';
                echo 'Đó! lại còn quên nhập mật khẩu <br>';
            }
 
         
 
        // Kiểm tra lỗi
    if (empty($error)) {
        // Kiểm tra thông tin đăng nhập
        $valid_email = 'ntpccn@gmail.com'; // Email hợp lệ
        $valid_password = '12345'; // Mật khẩu hợp lệ

        if ($data['email'] === $valid_email && $data['password'] === $valid_password) {
            // echo 'Đăng nhập thành công';
        echo '<script>window.location.href = "index.php?controller=category&action=index";</script>';

            // Thực hiện các thao tác cần thiết sau khi đăng nhập thành công
            // ...
        } else {
            $error['login'] = 'Email hoặc mật khẩu không chính xác';
            echo 'Email hoặc mật khẩu không chính xác <br>';
        }
    }
 
            // Lưu dữ liệu
            if (!$error ){
                // echo 'Đăng nhập thành công';
                // Code lưu dữ liệu tại đây
                // ...
            }
            else{
                echo 'Lỗi từa lưa kìa';
            }
        }
        ?>
        <style>
            body {
            background-color: red; /* Màu nền mới, ví dụ: xám nhạt */
        }
        </style>