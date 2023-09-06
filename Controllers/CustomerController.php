<?php

// require_once 'Models/Category.php';
require_once 'Models/Customer.php';
class CustomerController {
    // Hien thi danh sach records => table
    public function index(){
        $items = Customer::all();
        // echo "<pre>";
        // die();
        // Truyen data xuong Views
        require_once 'Views/customers/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        $items = Customer::all();
        require_once 'Views/customers/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
        Customer::store($_POST);
        // Chuyen huong ve trang danh sach
        // header("Location: index.php?Controller=customer&action=index");
        echo '<script>window.location.href = "index.php?controller=customer&action=index";</script>';


    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $row = Customer::find($id);
        // $Customers = Customer::all();
        // Truyen xuong Views
        require_once 'Views/customers/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        Customer::update( $id, $_POST );

        // Chuyen huong ve trang danh sach
        // header("Location: index.php?controller=customer&action=index");
        echo '<script>window.location.href = "index.php?controller=customer&action=index";</script>';

    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        Customer::delete($id);
        // Chuyen huong ve trang danh sach
        // header("Location: index.php?controller=customer&action=index");
        echo '<script>window.location.href = "index.php?controller=customer&action=index";</script>';

    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = Customer::find($id);

        // Truyen xuong Views
        require_once 'Views/customers/show.php';
    }

    //tim liem
//     public function search(){
//         Customer::search();
//     //    Customer::search();
// // Chuyen huong ve trang danh sach
// header("Location: index.php?controller=Customer&action=index");
//     }
}