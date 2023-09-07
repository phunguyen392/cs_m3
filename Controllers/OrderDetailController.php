<?php

require_once 'Models/Product.php';
require_once 'Models/Order.php';
require_once 'Models/OrderDetail.php';
require_once 'Models/Category.php';
require_once 'Models/Customer.php';



class OrderDetailController {
    // Hien thi danh sach records => table
    public function index(){
        $items = OrderDetail::all();
        // echo "<pre>";
        // die();
        // Truyen data xuong Views
        require_once 'Views/order_details/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        $items = OrderDetail::all();
        $orders = Order::all();
        $customers = Customer::all();
        $products = Product::all();

        require_once 'Views/order_details/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
        OrderDetail::store($_POST);
        // Chuyen huong ve trang danh sach
        // header("Location: index.php?controller=order_detail&action=index");
        echo '<script>window.location.href = "index.php?controller=order_detail&action=index";</script>';


    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $row = OrderDetail::find($id);
        $orders = Order::all();
        $products = Product::all();
        $customers = Customer::all();
        // Truyen xuong Views
        require_once 'Views/order_details/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        OrderDetail::update( $id, $_POST );

        // Chuyen huong ve trang danh sach
        // header("Location: index.php?controller=order_detail&action=index");
        echo '<script>window.location.href = "index.php?controller=order_detail&action=index";</script>';

    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        OrderDetail::delete($id);
        // Chuyen huong ve trang danh sach
        // header("Location: index.php?controller=order_detail&action=index");
        echo '<script>window.location.href = "index.php?controller=order_detail&action=index";</script>';

    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = OrderDetail::find($id);

        // Truyen xuong Views
        require_once 'Views/order_details/show.php';
    }

}