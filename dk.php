<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký và Đăng nhập</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Đăng ký và Đăng nhập</h1>
    
    <!-- Form Đăng ký -->
    <h2>Đăng ký</h2>
    <form method="post" action="">
        Username: <input type="text" name="user_name" required/><br/><br/>
        Email: <input type="email" name="email_user" required/><br/><br/>
        Password: <input type="password" name="password" required/><br/><br/>
        <input type="submit" name="register_btn" value="Đăng ký"/>
    </form>

    <!-- Form Đăng nhập -->
    <h2>Đăng nhập</h2>
    <form method="post" action="">
        Email: <input type="email" name="login_email" required/><br/><br/>
        Password: <input type="password" name="login_password" required/><br/><br/>
        <input type="submit" name="login_btn" value="Đăng nhập"/>
    </form>

    <?php
    // Kết nối đến cơ sở dữ liệu
    $db_username = 'root';
    $db_password = '';
    $database = 'cs_m3';
    try {
        $conn = new PDO('mysql:host=localhost;dbname='.$database, $db_username, $db_password);
    } catch (Exception $e) {
        echo '<h1>Không thể kết nối CSDL</h1>';
        exit;
    }

    // Xử lý đăng ký
    if (isset($_POST['register_btn'])) {
        $username = $_POST['user_name'];
        $email = $_POST['email_user'];
        $password = $_POST['password'];

        // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu chưa
        $checkEmail = "SELECT * FROM users WHERE email_user = '$email'";
        $result = $conn->query($checkEmail);

        if ($result->rowCount() > 0) {
            echo 'Email đã tồn tại';
        } else {
            $insertUser = "INSERT INTO users (user_name, email_user, password) VALUES ('$username', '$email', '$password')";
            if ($conn->query($insertUser) === TRUE) {
                echo 'Đăng ký thành công!';
            } else {
                echo 'Đăng ký thất bại';
            }
        }
    }

    // Xử lý đăng nhập
    if (isset($_POST['login_btn'])) {
        $login_email = $_POST['login_email'];
        $login_password = $_POST['login_password'];

        // Kiểm tra tài khoản admin
        if ($login_email === 'ntpccn.2208@gmail.com' && $login_password === '12245') {
            echo 'Đăng nhập thành công với tài khoản admin';
        } else {
            $checkUser = "SELECT * FROM users WHERE email_user = '$login_email' AND password = '$login_password'";
            $result = $conn->query($checkUser);

            if ($result->rowCount() > 0) {
                echo 'Đăng nhập thành công';
            } else {
                echo 'Đăng nhập thất bại';
            }
        }
    }

    $conn = null;
    ?>
</body>
</html>