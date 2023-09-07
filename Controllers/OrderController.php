<?php

require_once 'Models/Customer.php';
require_once 'Models/Order.php';
class OrderController {
    // Hien thi danh sach records => table
    public function index(){
        $items = Order::all();
        // echo "<pre>";
        // die();
        // Truyen data xuong Views
        require_once 'Views/orders/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        $customers = Customer::all();
        // var_dump($customers);
        // die();
        // $items = Order::all();
        require_once 'Views/orders/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
        Order::store($_POST);
        // Chuyen huong ve trang danh sach
        // header("Location: index.php?controller=order&action=index");
        echo '<script>window.location.href = "index.php?controller=order&action=index";</script>';

    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $row = Order::find($id);
        $cus = Customer::all();
        // Truyen xuong Views
        require_once 'Views/orders/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        Order::update( $id, $_POST );

        // Chuyen huong ve trang danh sach
        // header("Location: index.php?controller=order&action=index");
        echo '<script>window.location.href = "index.php?controller=order&action=index";</script>';

    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        Order::delete($id);
        // Chuyen huong ve trang danh sach
        // header("Location: index.php?controller=order&action=index");
        echo '<script>window.location.href = "index.php?controller=order&action=index";</script>';

    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = Order::find($id);

        // Truyen xuong Views
        require_once 'Views/orders/show.php';
    }

}