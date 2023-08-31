<?php
include 'search.php';
// Ket noi voi database
class Product
{
    // lay ta ca du lieu
    public static function all()
    {
        global $conn;
        if (isset($_GET['search'])) {
            $keyword = $_GET['search'];
            $sql = "SELECT products.*,categories.name
            FROM categories
            JOIN products ON categories.id = products.category_id
            WHERE products.quantity LIKE '%$keyword%'
            OR products.name LIKE '%$keyword%' ";
            

           
        } else {

            $sql = "SELECT categories.name, products.*
            FROM categories
            JOIN products ON categories.id = products.category_id;";
            $stmt = $conn->query($sql);
        }

        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        //  = $stmt->fetchAll(); 
        // Tra ve cho Model
        return $rows;
    }

    // lay chi tiet 1 du lieu
    public static function find($id)
    {
        global $conn;
        $sql = "SELECT products.*,categories.name FROM categories
            JOIN products ON categories.id = products.category_id
            WHERE products.id = $id ";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }

    // // Them moi du lieu
    public static function store($data)
    {
        global $conn;
        $name = $data['name'];
        $quantity = $data['quantity'];
        $price = $data['price'];
        $category_id = $data['category_id'];
        $status = $data['status'];
        
        if (isset($_FILES['image'])) {
            if (!$_FILES['image']['error']) {
                move_uploaded_file($_FILES['image']['tmp_name'], ROOT_DIR . '/Public/uploads/' . $_FILES['image']['name']);
                $image = '/Public/uploads/' . $_FILES['image']['name'];
            }
        }

        $sql = "INSERT INTO `products` 
            ( `name`, `quantity`, `price`, `category_id`, `image`,`status`) 
            VALUES 
            ('$name','$quantity','$price','$category_id','$image','$status')";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }

    // Cap nhat du lieu
    public static function update($id, $data)
    {
        global $conn;
        $name = $data['name'];
        $quantity = $data['quantity'];
        $price = $data['price'];
        $category_id = $data['category_id'];
        $status = $data['status'];

        $image = '';
          // Kiểm tra xem đã tải lên ảnh mới hay chưa
          if (isset($_FILES['image']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
            // Đường dẫn thư mục tải lên
            $uploadDir = ROOT_DIR . '/Public/uploads/';
             // Di chuyển ảnh mới vào thư mục đích
             $newImage = $uploadDir . $_FILES['image']['name'];
             move_uploaded_file($_FILES['image']['tmp_name'], $newImage);
             $image = '/Public/uploads/' . $_FILES['image']['name'];
            // Xóa ảnh cũ nếu có
            $sql = "SELECT `image` FROM `products` WHERE `id` = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $oldImage = $stmt->fetchColumn();
            
            if ($oldImage && file_exists($uploadDir . $oldImage)) {
                unlink($uploadDir . $oldImage);
            }

           
        } else {
            // Không có ảnh mới được tải lên, giữ nguyên ảnh cũ
            $sql = "SELECT `image` FROM `products` WHERE `id` = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $image = $stmt->fetchColumn();
        }


        $sql = "UPDATE `products` SET `name` = '$name', `quantity` = '$quantity',
         `price` = '$price', `image` = '$image', `category_id` = '$category_id', `status` = '$status' 
         WHERE `id` = $id";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }

    // //Xoa du lieu
    public static function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM products WHERE id = $id";
        // Thuc thi SQL
        $conn->exec($sql);
        return true;
    }

    // tim du lieu
    // public static function search()
    // {
    //     global $conn;
    //     $sql = "SELECT * FROM products WHERE id LIKE '%$search%";
    //     $stmt = $conn->query($sql);
    //     $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $row = $stmt->fetch();
    //     return $row;
    // }
}