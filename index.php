<?php
        $url = isset($_GET['url']) ? $_GET['url']: "/";
        
        require_once('vendor/autoload.php');
        require_once('commons/helpers.php');
        switch ($url) {
            case '/':
                $ctr = new HomeController();
                $ctr->index();
                break;
            case 'page_login':
                $ctr = new HomeController();
                $ctr->login();
                break;
            case 'login':
                $ctr = new HomeController();
                $ctr->savelogin();
                break;
            case 'log_out':
                $ctr = new HomeController();
                $ctr->delete();
                break;
            case 'product_detail':
                $ctr = new HomeController();
                $ctr->product_detail();
                break;
           case 'manage_user':
                $ctr = new HomeController();
                $ctr->profile();
                break;     
            case 'update_user':
                $ctr = new HomeController();
                $ctr->saveProfile();
                break;  
            case 'edit_password':
                $ctr = new HomeController();
                $ctr->editPassword();
                break; 
            case 'update_password':
                $ctr = new HomeController();
                $ctr->updatePassword();
                break; 
            // cart
            case 'cart':
                $ctr = new CartController();
                $ctr->add();
                break;
            case 'cartquantity':
                $ctr = new CartController();
                $ctr->showquantity();
                break;
            case 'Cartshow':
                $ctr = new CartController();
                $ctr->Cartshow();
                break;
            case 'showquantity':
                $ctr = new CartController();
                $ctr->sssss();
                break;
            case 'update_protducts':
                $ctr = new CartController();
                $ctr->update();
                break;
            case 'delete_protducts':
                $ctr = new CartController();
                $ctr->remove();
                break;
            case 'price_protducts':
                $ctr = new CartController();
                $ctr->price_protducts();
                break;
            case 'bill':
                $ctr = new CartController();
                $ctr->bill();
                break;
            case 'order':
                $ctr = new CartController();
                $ctr->order();
                break;
            //
            case 'product_details':
                $ctr = new HomeController();
                $ctr->product_details();
                break;
            //feedback
            case 'feedback':
                $ctr = new HomeController();
                $ctr->feedback();
                break;
            case 'Send_Feedback':
                $ctr = new HomeController();
                $ctr->Send_Feedback();
                break;
            //admin
            // phần quản lý tài khoản
            case 'Dashboard':
                $ctr = new DashboardController();
                $ctr->index();
                break;
            case 'list_user':
                $ctr = new CustomController();
                $ctr->index();
                break;
            case 'Created_acount':
                $ctr = new CustomController();
                $ctr->insert();
                break;
            case 'Edit_acount':
                $ctr = new CustomController();
                $ctr->edit();
                break;
            case 'created_user':
                $ctr = new CustomController();
                $ctr->created_user();
                break;
            case 'update_acount':
                $ctr = new CustomController();
                $ctr->update_acount();
                break;
            case 'Delete_acount':
                $ctr = new CustomController();
                $ctr->Unset();
                break;
            // end
            // phần comment
            case 'Comment':
                $ctr = new CommentController();
                $ctr->index();
                break;
            case 'comment_details':
                $ctr = new CommentController();
                $ctr->comment_details();
                break;
            case 'delete_comment':
                $ctr = new CommentController();
                $ctr->delete_comment();
                break;
            //end
            //Statistical
            case 'list_Statistical':
                $ctr = new StatisticalController();
                $ctr->index();
                break;
            case 'show_charts':
                $ctr = new StatisticalController();
                $ctr->show_charts();
                break;
            case 'showchart':
                $ctr = new StatisticalController();
                $ctr->showchart();
                break;
            //Feedback
            case 'feedback_user':
                $ctr = new CommentController();
                $ctr->feedback_user();
                break;
            case 'Send_Mail':
                $ctr = new CommentController();
                $ctr->SendMail();
                break;
            //
            case 'order_statistics':
                $ctr = new StatisticalController();
                $ctr->order_statistics();
                break;
            //end
            // list order
            case 'list_order':
                $ctr = new OrderController();
                $ctr->index();
                break;
            case 'order_detail':
                $ctr = new OrderController();
                $ctr->order_detail();
                break;
            case 'delete_order':
                $ctr = new OrderController();
                $ctr->delete_order();
                break;
            // P R O D U C T
            case 'list_product':
                $ctr = new ProductController();
                $ctr->index();
                break;   
            case 'add_product':
                $ctr = new ProductController();
                $ctr->addForm();
                break;   
            case 'save_product':
                $ctr = new ProductController();
                $ctr->saveAdd();
                break;  
            case 'edit_product':
                $ctr = new ProductController();
                $ctr->editForm();
                break;    
            case 'update_product':
                $ctr = new ProductController();
                $ctr->saveEdit();
                break;     
            case 'remove_product':
                $ctr = new ProductController();
                $ctr->remove();
                break;   
                // C A T E G O R Y
            case 'list_category':
                $ctr = new CategoryController();
                $ctr->index();
                break;   
            case 'add_category':
                $ctr = new CategoryController();
                $ctr->addForm();
                break;   
            case 'save_category':
                $ctr = new CategoryController();
                $ctr->saveAdd();
                break;  
            case 'edit_category':
                $ctr = new CategoryController();
                $ctr->editForm();
                break;    
            case 'update_category':
                $ctr = new CategoryController();
                $ctr->saveEdit();
                break;     
            case 'remove_category':
                $ctr = new CategoryController();
                $ctr->remove();
                break;   

            // D I S C O U N T    
            case 'list_discount':
                $ctr = new DiscountController();
                $ctr->index();
                break;
            case 'add_discount':
                $ctr = new DiscountController();
                $ctr->addForm();
                break;    
            case 'save_discount':
                $ctr = new DiscountController();
                $ctr -> saveAdd();
                break;
            case 'edit_discount':
                $ctr = new DiscountController();
                $ctr -> editForm();
                break;
            case 'update_discount':
                $ctr = new DiscountController();
                $ctr -> saveEdit();  
                break;
            case 'remove_discount':
                $ctr = new DiscountController();
                $ctr -> remove();
                break;    
            case 'change_discount':
                $ctr = new DiscountController();
                $ctr -> changeStatus();    
                      
            // N E W S 
            case 'list_news':
                $ctr = new NewsController();
                $ctr -> index();
                break;
            case 'add_news':
                $ctr = new NewsController();
                $ctr -> addForm();     
                break;   
            case 'save_news':
                $ctr = new NewsController();
                $ctr -> saveAdd();
                break;
            case 'edit_news':
                $ctr = new NewsController();
                $ctr -> editForm();
                break;
            case 'update_news':
                $ctr = new NewsController();
                $ctr -> saveEdit();  
                break;
            case 'remove_news':
                $ctr = new NewsController();
                $ctr -> remove();    
                break;

            // N G U Y Ê N   L I Ệ U
            case 'list_nguyenlieu':
                $ctr = new NguyenLieuController();
                $ctr -> index();
                break;
            case 'add_nguyenlieu':
                $ctr = new NguyenLieuController();
                $ctr -> addForm();     
                break;   
            case 'save_nguyenlieu':
                $ctr = new NguyenLieuController();
                $ctr -> saveAdd();
                break;
            case 'edit_nguyenlieu':
                $ctr = new NguyenLieuController();
                $ctr -> editForm();
                break;
            case 'update_nguyenlieu':
                $ctr = new NguyenLieuController();
                $ctr -> saveEdit();  
                break;
            case 'remove_nguyenlieu':
                $ctr = new NguyenLieuController();
                $ctr -> remove();    
                break;    

            
            case 'indexx':
                $ctr = new HomeController();
                $ctr->indexx();
                break;   
            // order
            case 'update_status':
                $ctr = new OrderController();
                $ctr->Status();
                break;
            case 'showstatus':
                $ctr = new OrderController();
                $ctr->showstatus();
                break;
            case 'comment_prae':
                $ctr = new CommentController();
                $ctr->comment();
                break;

            
            case 'value':
                # code...
                break;
            // decentralization
            case 'list_decentralization':
                $ctr = new DecentralizationController();
                $ctr->index();
                break;
            case 'Edit_Decentralization':
                $ctr = new DecentralizationController();
                $ctr->Edit();
                break;
            case 'save_Decentralization':
                $ctr = new DecentralizationController();
                $ctr->save_Decentralization();
                break;
                //
            case 'checkPrivilege':
                $ctr = new DecentralizationController();
                $ctr->checkPrivilege();
                break;
            case 'delete_feed':
                $ctr = new CommentController();
                $ctr->delete_feed();
                break;
            //
            case 'value':
                # code...
                break;
            default:
            break;
        }

?>