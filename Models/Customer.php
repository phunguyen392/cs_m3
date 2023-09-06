<?php

    // Ket noi voi database
    class Customer {
        // lay ta ca du lieu
        public static function all(){
            global $conn;
            $sql = "SELECT * FROM `customers`";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll(); 
            // Tra ve cho Model
            return $rows;
        }

        // lay chi tiet 1 du lieu
        public static function find($id){
            global $conn;
            $sql = "SELECT * FROM `customers` WHERE id = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }

        // // Them moi du lieu
        public static function store($data){
            global $conn;
            $customer_name = $data['customer_name'];
            $address = $data['address'];
            $phone = $data['phone'];
            $email = $data['email'];
       

 // Kiểm tra tính hợp lệ của địa chỉ email
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return false; // Địa chỉ email không hợp lệ
}

// Kiểm tra xem địa chỉ email đã tồn tại hay chưa
$sql = "SELECT COUNT(*) FROM `customers` WHERE `email` = '$email'";
$stmt = $conn->query($sql);
$rowCount = $stmt->fetchColumn();

if ($rowCount > 0) {
    $message= "mail da ton tai";
    echo "$message";

    return false; // Địa chỉ email đã tồn tại
}

            $sql = "INSERT INTO `customers` 
            ( `customer_name`, `address`, `phone`, `email`) 
            VALUES 
            ('$customer_name','$address','$phone', '$email')";

            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update( $id, $data ){
            global $conn;
            $customer_name = $data['customer_name'];
            $address = $data['address'];
            $phone = $data['phone'];
            $email = $data['email'];
          

            $sql = "UPDATE `customers` SET `customer_name` = '$customer_name', `address` = '$address',`phone` = '$phone', `email` = '$email'  WHERE `id` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

        // //Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM customers WHERE id = $id";
            // Thuc thi SQL
            $conn->exec($sql);
            return true;
        }
          //tim du lieu
        //   public static function search(){
        //     global $conn;
        //     $sql = "SELECT * FROM categories WHERE id LIKE '%$search%";
        //     $stmt = $conn->query($sql);
        //     $stmt->setFetchMode(PDO::FETCH_ASSOC);
        //     $row = $stmt->fetch();
        //     return $row;
        // }
    }