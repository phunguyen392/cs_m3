<?php

require_once 'Models/Category.php';
// require_once 'Models/Category.php';

class CategoryController {
    // Hien thi danh sach records => table
    
    public function index(){
        $items = Category::all();

        
        //them trang thai thanh cong cac kieu
        if (isset($_GET['success']) && $_GET['success'] == 1) {
            $successMessage = 'THÊM THÀNH CÔNG!';
        } else if (isset($_GET['success']) && $_GET['success'] == 2) {
            $successMessage1 = 'CẬP NHẬT THÀNH CÔNG!';
        } else if (isset($_GET['success']) && $_GET['success'] == 3) {
            $successMessage2 = 'XÓA THÀNH CÔNG!';
        }
        //



        // echo "<pre>";
        // die();
        // Truyen data xuong Views
        require_once 'Views/categories/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        $items = Category::all();
        require_once 'Views/categories/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
        Category::store($_POST);
        // Chuyen huong ve trang danh sach
        // header("Location: index.php?Controller=category&action=index");
        echo '<script>window.location.href = "index.php?controller=category&action=index&success=1";</script>';


    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $row = Category::find($id);
        // $Categorys = Category::all();
        // Truyen xuong Views
        require_once 'Views/categories/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        Category::update( $id, $_POST );

        // Chuyen huong ve trang danh sach
        // header("Location: index.php?controller=category&action=index");
        echo '<script>window.location.href = "index.php?controller=category&action=index&success=2";</script>';

    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        Category::delete($id);
        // Chuyen huong ve trang danh sach
        // header("Location: index.php?controller=category&action=index");
        echo '<script>window.location.href = "index.php?controller=category&action=index&success=3";</script>';

    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = Category::find($id);

        // Truyen xuong Views
        require_once 'Views/categories/show.php';
    }

    //tim liem
//     public function search(){
//         Category::search();
//     //    Category::search();
// // Chuyen huong ve trang danh sach
// header("Location: index.php?controller=category&action=index");
//     }
}