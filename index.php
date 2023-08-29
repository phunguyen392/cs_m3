<?php
// Ket noi voi DB
require_once 'db.php';
?>

<?php
   
   $action = isset($_GET['action']) ? $_GET['action'] : 'index';
   $controllers = isset($_GET['controller']) ? $_GET['controller'] : 'product';

   switch ($controllers) {
       case 'category':
           require_once 'Controllers/CategoryController.php';
           $objController = new CategoryController();
           break;    
    case 'product':
        require_once 'Controllers/ProductController.php';
        $objController = new ProductController();
        break;   
       
       default:
           # code...
           break;
   }
   switch ($action) {
       case 'index':
           $objController->index();
           break;
       case 'create':
           $objController->create();
           break;
       case 'store':
           $objController->store();
           break;
       case 'edit':
           $objController->edit();
           break;
       case 'update':
           $objController->update();
           break;
       case 'show':
           $objController->show();
           break;
       case 'destroy':
           $objController->destroy();
           break;
        // case 'search':
        //     $objController->search();
        //     break;
       default:
           # code...
           break;
   }
   ?>  