<?php
    require_once('mvc/Model/Base.php'); 
    class CommentController{
        private $data;
        private $recusion = '';
        public function __construct(){ 
            $customer = new Base();
            // $result = $customer->all('comment');
            // var_dump($result);
            // die;
            $this->data = $customer->all('comment');
        }
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
        public function feedback_user()
        {
            include ('mvc/view/admin/component/Comment/Feedback_User.php');
        }
        public function comment($id=0,$text='-'){
            foreach($this->data as $value){
                if ($value['parent_id']==$id) {
                    echo "<pre>";
                    print_r($value);    
                    echo "</pre>";
                    $this->comment($value['id'],$text.'-');
                }
            }
            // return $this->recusion;
        }
    }