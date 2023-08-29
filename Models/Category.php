<?php

    // Ket noi voi database
    class Category {
        // lay ta ca du lieu
        public static function all(){
            global $conn;
            $sql = "SELECT * FROM `categories`";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll(); 
            // Tra ve cho Model
            return $rows;
        }

        // lay chi tiet 1 du lieu
        public static function find($id){
            global $conn;
            $sql = "SELECT * FROM `categories` WHERE id = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }

        // // Them moi du lieu
        public static function store($data){
            global $conn;
            $name = $data['name'];
            $description = $data['description'];
       
            $sql = "INSERT INTO `categories` 
            ( `name`, `description`) 
            VALUES 
            ('$name','$description')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update( $id, $data ){
            global $conn;
            $name = $data['name'];
            $description = $data['description'];
          

            $sql = "UPDATE `categories` SET `name` = '$name', `description` = '$description' WHERE `id` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

        // //Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM categories WHERE id = $id";
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