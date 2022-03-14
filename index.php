<?php
        $url = isset($_GET['url']) ? $_GET['url']: "/";
        
        require_once('vendor/autoload.php');
        require_once('commons/helpers.php');

        switch ($url) {
            case '/':
                $ctr = new HomeController();
                $ctr->index();
                break;
            // phần quản lý tài khoản
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
            case 'Statistical':
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
            case 'feedback_user':
                $ctr = new CommentController();
                $ctr->feedback_user();
                break;
            // list order
            case 'list_order':
                $ctr = new OrderController();
                $ctr->index();
                break;

            // product
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
            default:
                break;
        }

?>