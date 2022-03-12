<?php
    require_once('mvc/Model/Base.php'); 
    class CommentController{
        public function index()
        {
            $customer = new Base();
            $result = $customer->Group(['prodcts_sale.products_name,prodcts_sale.image,prodcts_sale.id, COUNT(*) AS SOLUONG,MAX(comment.created_time) AS datenew,MIN(comment.created_time) AS datelate'],'comment',);
            include ('mvc/view/admin/component/Comment/Comment.php');
        }
        public function comment_details()
        {
            $i = 1;
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->Group2($id);
            include ('mvc/view/admin/component/Comment/Comment_details.php');
        }
        public function delete_comment()
        {
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->delete('comment',$id);
            return header("location:Comment");
        }
    }