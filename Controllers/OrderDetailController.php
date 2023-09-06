<?php

require_once 'Models/Product.php';
require_once 'Models/Order.php';
require_once 'Models/OrderDetail.php';

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
        require_once 'Views/order_details/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
        OrderDetail::store($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=order_detail&action=index");

    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $row = OrderDetail::find($id);
        // $cus = Customer::all();
        // Truyen xuong Views
        require_once 'Views/order_details/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        OrderDetail::update( $id, $_POST );

        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=order_detail&action=index");
    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        OrderDetail::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=order_detail&action=index");
    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = OrderDetail::find($id);

        // Truyen xuong Views
        require_once 'Views/order_details/show.php';
    }

}