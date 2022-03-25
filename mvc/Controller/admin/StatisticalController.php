<?php
 require_once('mvc/Model/Base.php'); 
 require_once('mvc/Model/database.php');
class StatisticalController{
    public function index()
    {
                $data = new databse();
                $conn = $data->database();
                $sql = "SELECT categories.name,COUNT(*) AS SOLUONG,MAX(prodcts_sale.price) AS gíacao,MIN(prodcts_sale.price) AS giánhỏ,AVG(prodcts_sale.price)  AS TRUNGBINH FROM `prodcts_sale` JOIN categories on prodcts_sale.categories_id = categories.id GROUP BY categories.name";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $i = 0;
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                include ('mvc/view/admin/component/Statistical/Statistical.php');
    }
    public function show_charts()
    {
        include ('mvc/view/admin/component/Statistical/Show_charts.php');
    }
    public function showchart()
    {
        $data = new databse();
            $conn = $data->database();
            // $sql = "SELECT categories.name,COUNT(*) AS SOLUONG FROM `prodcts_sale` JOIN categories on prodcts_sale.categories_id = categories.id GROUP BY categories.name";
            $sql = "SELECT * FROM `orders`";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $i = 0;
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // echo "<pre>";
            // var_dump($result);
            // die;
            foreach ($result as $key) {
                $char_data [] = array(
                    'year' => $key['created_time'],
                    'order' => $key['id'],  
                    'sales' => $key['total'],
                    'quantity' => $key['quantity'],
                    'huy' => 2,
                    'kim' => "huynguyen"
                    
                );
            };
            echo $data = json_encode($char_data);
    }
    public function order_statistics()
    {   
        $data = new databse();
        $conn = $data->database();
        $time = $_GET['timenow'];
        $sql = "SELECT quantity,total FROM orders  WHERE `created_time` IN ('$time')";
        $stmt1 = $conn->prepare($sql);
        $stmt1->execute();
        $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
        $sum = count($result1);
        $sql = "SELECT * FROM statistical";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // echo strval($time);
        // echo "'$time'";
        foreach ($result as $key => $value) {
            if ($value['booking_date'] == $time && $value['quantity'] == $sum) {
                $messgare = 'ok';
                echo 'ok'; 
            }
        }
        if (!isset($messgare)) {
            $sql = "SELECT quantity,total FROM orders  WHERE `created_time` IN ('$time')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $total = 0;
            foreach ($result as $key => $value) {
                $total = $total + $value['total'];
            }
            $sum = count($result);
            $sql = "INSERT INTO statistical SET booking_date= '$time',total='$total',quantity='$sum'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            echo 'tao';
        }
    }
}