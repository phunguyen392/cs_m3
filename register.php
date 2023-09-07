<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg-5 d-none d-lg-block ">
  <img src="<?php echo ROOT_URL ?>/Public/uploads/mikami.jpg" alt="Login Image" style="width: 500px; height: 720px;">

                    </div>
                    
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
    <form method="post" action="" class="user">
    <div class="form-group ">

         <input type="text" name="user_name" value="" class="form-control form-control-user" placeholder="User Name"> <br/><br/>
         
         <input type="email" name="email_user" value="" class="form-control form-control-user" placeholder="Email Address"> <br/><br/>
         <input type="password" name="password" value="" class="form-control form-control-user" placeholder="Password"> <br/><br/>
         <input type="password" class="form-control form-control-user" placeholder="Repeat Password">
        </div>
        <input type="submit" name="btn" value="Register Account" class="btn btn-primary btn-user btn-block">

        <!-- <a href="login.php" class="btn btn-primary btn-user btn-block"> -->
                                    
                                </a>
                                <hr>
                               
                                <a href="https://www.facebook.com/?locale=vi_VN" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
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
    </form>

   
</body>
</html>


<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['btn'])) {
            // B1: Lấy thông tin
            $username = isset($_POST['user_name']) ? $_POST['user_name'] : '';
            $email = isset($_POST['email_user']) ? $_POST['email_user'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            // B2: Kiểm tra dữ liệu
            if (!$username || !$email || !$password) {
                // echo 'Vui lòng nhập đầy đủ thông tin';
                echo '<script language="javascript">alert("Vui lòng nhập đầy đủ thông tin"); window.location="register.php";</script>';

            } else {
                // B3: Xử lý đăng ký
                // Kết nối đến cơ sở dữ liệu
                // define('ROOT_URL','http://localhost/cs_m3/');
                // define('ROOT_DIR', dirname(__FILE__) );
            
                // $db_username = 'root';
                // $db_password = '';
                // $database = 'cs_m3';
                // try {
                //     $conn = new PDO('mysql:host=localhost;dbname='.$database, $db_username, $db_password);
                // } catch (Exception $e) {
                //     // echo $e->getMessage();
                //     echo '<h1>Khong the ket noi CSDL</h1>';
                // }            

                // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu chưa
                $checkEmail = "SELECT * FROM users WHERE email_user = '$email'";
                $result = $conn->query($checkEmail);

                if ($result->rowCount() > 0) {
                    // echo 'Email đã tồn tại';
                    echo '<script language="javascript">alert("Email đã tồn tại"); window.location="register.php";</script>';

                } else {
                    // Thực hiện thêm người dùng mới vào cơ sở dữ liệu
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                    $insertUser = "INSERT INTO users (user_name, email_user, password) VALUES ('$username', '$email', '$hashedPassword')";

                    if ($conn->query($insertUser) === TRUE) {
                        // echo 'Đăng ký thất bại';
                        echo '<script language="javascript">alert("Đăng ký thất bại"); window.location="register.php";</script>';

                    } else {
                        // echo 'Đăng ký thành công!';
                        echo '<script language="javascript">alert("Đăng ký thành công"); window.location="login.php";</script>';
                    }
                }

                $conn = null;
            }
        }
    }
    ?>
    <style>
h1{
    color: red;
}
    </style>