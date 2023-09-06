<?php

    // Ket noi voi database
    class Order {
            // Lấy tất cả dữ liệu
            public static function all(){
                global $conn;
                $sql = "SELECT orders.*, customers.customer_name 
                        FROM `orders`
                        JOIN customers ON orders.customer_id = customers.id";
                $stmt = $conn->query($sql);
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $rows = $stmt->fetchAll(); 
                // Trả về cho Model
                return $rows;
            }

        // lay chi tiet 1 du lieu
        public static function find($id){
            global $conn;
            $sql = "SELECT orders.*, customers.customer_name FROM `orders` 
            JOIN customers ON orders.customer_id = customers.id
            WHERE orders.id = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }

        // // Them moi du lieu
        public static function store($data){
            global $conn;
            $customer_id = $data['customer_id'];
            $order_date = $data['order_date'];
            $total_amount = $data['total_amount'];
       
            $sql = "INSERT INTO `orders` 
            ( `customer_id`, `order_date`, `total_amount`) 
            VALUES 
            ('$customer_id','$order_date','$total_amount')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update( $id, $data ){
            global $conn;
            $customer_id = $data['customer_id'];
            $order_date = $data['order_date'];
            $total_amount = $data['total_amount'];
          

            $sql = "UPDATE `orders` SET `customer_id` = '$customer_id', `order_date` = '$order_date',`total_amount` = '$total_amount' WHERE `id` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

        // //Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM orders WHERE id = $id";
            // Thuc thi SQL
            $conn->exec($sql);
            return true;
        }
  
    }