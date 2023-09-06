<?php
require_once 'Models/Product.php';
require_once 'Models/Category.php';
class ProductController {
    // Hien thi danh sach records => table
    public function index(){
        $items = Product::all();
        // echo "<pre>";
        // die();
        // Truyen data xuong Views
        require_once 'Views/products/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        $items = Product::all();
        require_once 'Views/products/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
        Product::store($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=product&action=index");

    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $row = Product::find($id);
        $cates = Category::all();
        // Truyen xuong Views
        require_once 'Views/products/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        Product::update( $id, $_POST );

        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=product&action=index");
    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        Product::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=product&action=index");
    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = Product::find($id);

        // Truyen xuong Views
        require_once 'Views/products/show.php';
    }

    //tim liem
//     public function search(){
//         Product::search();
//     //    Product::search();
// // Chuyen huong ve trang danh sach
// header("Location: index.php?controller=product&action=index");
//     }
}