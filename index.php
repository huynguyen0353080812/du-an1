<?php
        $url = isset($_GET['url']) ? $_GET['url']: "/";
        
        require_once('vendor/autoload.php');

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
            default:
                break;
        }

?>