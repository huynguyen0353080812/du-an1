<?php
    include "../../Model/pdo.php";
    include "../../Model/sanpham.php";
    include "global.php";
    include "../../view/client/header.php";
    $spnew=loadall_product_view();

    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case 'product':
                include "../../view/client/product.php";
                break;
            default:
                include "../../view/client/product.php";
                break;
        }
    }else{
        include "../../view/client/product.php";
    }
    include "../../view/client/footer.php"
?>