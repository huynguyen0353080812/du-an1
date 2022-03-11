<?php
        $url = isset($_GET['url']) ? $_GET['url']: "/";
        
        require_once('vendor/autoload.php');

        switch ($url) {
            case '/':
                $ctr = new HomeController();
                $ctr->index();
                $ctr->categoryshow();
                break;
            case 'index':
                $ctr = new HomeController();
                $ctr->index();
                $ctr->categoryshow();
                break;
            case 'product_details':
                $ctr = new HomeController();
                echo $ctr->product_details();
                break;
            case 'login':
                $ctr = new HomeController();
                $ctr->login();
                break;
            case 'registration':
                $ctr = new HomeController();
                $ctr->registration();
                break;
            case 'registration_acount':
                $ctr = new HomeController();
                $ctr->registration_acount();
                break;
            case 'delete':
                $ctr = new HomeController();
                $ctr->delete();
                break;
            case 'contac':
                $ctr = new HomeController();
                $ctr->contac();
                break;
            // search
            case 'search':
                $ctr = new HomeController();
                $ctr->search();
                break;
            // bill
            case 'bill':
                $ctr = new HomeController();
                $ctr->bill();
                break;
            case 'order':
                $ctr = new HomeController();
                $ctr->order();
                break;
            //cart
            case 'cart':
                $ctr = new CartController();
                $ctr->add();
                break;
            case 'showcart':
                $ctr = new CartController();
                $ctr->showcart();
                break;
            case 'cartquantity':
                $ctr = new CartController();
                $ctr->showquantity();
                break;
            case 'delete_protducts':
                $ctr = new CartController();
                $ctr->remove();
                break;
            case 'update_protducts':
                $ctr = new CartController();
                $ctr->update();
                break;
            case 'showquantity':
                $ctr = new CartController();
                $ctr->sssss();
                break;
            // 
            // admin
            //Dashboard
            case 'Dashboard':
                $ctr = new DashboardController();
                $ctr->index();
                break;
            // Customers
            case 'Customers':
                $ctr = new CustomController();
                $ctr->index();
                break;
            case 'edit_custom':
                $ctr = new CustomController();
                $ctr->edit();
                break;
            case 'editcustomer':
                $ctr = new CustomController();
                $ctr->update();
                break;
            case 'delete_custom':
                $ctr = new CustomController();
                $ctr->Unset();
                break;
            case 'insert_acount':
                $ctr = new CustomController();
                $ctr->insert();
                break;
            case 'insert_customer':
                $ctr = new CustomController();
                $ctr->insert_acount();
                break;
            // products
            case 'Products':
                $ctr = new ProductController();
                $ctr->index();
                break;
            case 'edit_product':
                $ctr = new ProductController();
                $ctr->edit();
                break;
            case 'editproducts':
                $ctr = new ProductController();
                $ctr->editproducts();
                break;
            case 'insert_products':
                $ctr = new ProductController();
                $ctr->insert();
                break;
            case 'insertproducts':
                $ctr = new ProductController();
                $ctr->insertproduct();
                break;
            case 'delete_product':
                $ctr = new ProductController();
                $ctr->Delete();
                break; 
            // comment
            case 'Comment':
                $ctr = new CommentController();
                $ctr->index();
                break;
            case 'detail':
                $ctr = new CommentController();
                $ctr->detail();
                break;
            case 'deletecomment':
                $ctr = new CommentController();
                $ctr->delete();
                break;
            case 'inser_comment':
                $ctr = new CommentController();
                $ctr->inser_comment();
                break;
            case 'delete_comment':
                $ctr = new HomeController();
                $ctr->DeleteComment();
                break;
            // Category
            case 'Category':
                $ctr = new CategoryControllers();
                $ctr->index();
                break;
            case 'Created':
                $ctr = new CategoryControllers();
                $ctr->created();
                break;
            case 'CreatedCategory':
                $ctr = new CategoryControllers();
                $ctr->store();
                break;
            case 'delete_category':
                $ctr = new CategoryControllers();
                $ctr->delete();
                break;
            case 'edit_category':
                $ctr = new CategoryControllers();
                $ctr->edit();
                break;
            case 'updateCategory':
                $ctr = new CategoryControllers();
                $ctr->update();
                break;
            //statistical
            case 'statistical':
                $ctr = new StatisticalController();
                $ctr->index();
                break;
            case 'Decentralization':
                $ctr = new DecentralizationController();
                $ctr->index();
                break;
            case 'chart':
                $ctr = new StatisticalController();
                $ctr->showchart();
                break;
            case 'showchart':
                $ctr = new StatisticalController();
                $ctr->showchart();
                break;
            case 'test_name':
                $ctr = new CartController();
                $ctr->test();
                break;
            case 'update_user_status':
                $ctr = new CustomController();
                $ctr->update_user_status();
                break;
            case 'show_user_status':
                $ctr = new CustomController();
                $ctr->show_user_status();
                break;
            default:
                break;
        }

?>