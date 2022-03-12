<?php
        $url = isset($_GET['url']) ? $_GET['url']: "/";
        
        require_once('vendor/autoload.php');

        switch ($url) {
            case '/':
                $ctr = new HomeController();
                $ctr->index();
                break;
            case 'list_user':
                $ctr = new HomeController();
                $ctr->list_user();
                break;
            default:
                break;
        }

?>