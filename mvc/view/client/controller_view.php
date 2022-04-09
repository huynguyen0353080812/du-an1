<?php
    session_start();
    include "../../Model/pdo.php";
    include "../../Model/sanpham.php";
    include "../../Model/danhmuc.php";
    include "global.php";
    include "header.php";

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
    $spnew=loadall_product_view();
    $dsdm=loadall_danhmuc();
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case 'product':
                // if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                //     $iddm=$_GET['iddm'];
                //     $dssp=loadall_sanpham("",$iddm);
                //     include "../../view/client/product.php";
                // }else{
                //     include "../../view/client/product.php";
                // }
                if(isset($_POST['kyw'])&&($_POST['kyw'])!=""){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                    
                }else{
                    $iddm=0;
                }
                $dssp=loadall_sanpham($kyw,$iddm);
                $tendm=load_ten_dm($iddm);
                include "product.php";
                break;
            case 'cart':
                include "cart.php";
                break;
            case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $products_name=$_POST['products_name'];
                    $image=$_POST['image'];
                    $price=$_POST['price'];
                    $soluong=$_POST['soluong'];
                    $ttien=$soluong * $price;
                    $spadd=[$id,$products_name,$image,$price,$soluong,$ttien];
                    array_push($_SESSION['mycart'],$spadd);
                }
                include "cart.php";
                break;
            case 'delcart':
                if(isset($_GET['idcart'])){
                    array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                }else{
                    $_SESSION['mycart']=[];
                }
                include "cart.php";
                // header('location: controller_view.php?act=cart');
                break;
            case 'order':
                if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $phone=$_POST['phone'];
                    $address=$_POST['address'];
                    $created_time=date('h:i:sa d/m/Y');
                    $total=tongdonhang();

                    $idorder=insert_order($id,$name,$phone,$address,$status,$note,$total,$quantity,$created_time);
                }
                break;
            default:
                include "cart.php";
                break;
        }
    }else{
        include "product.php";
    }
    include "footer.php";
?>