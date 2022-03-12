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
            // $sql = "SELECT categories.name,COUNT(*) AS SOLUONG,MAX(prodcts_sale.price) AS gíacao,MIN(prodcts_sale.price) AS giánhỏ,AVG(prodcts_sale.price)  AS TRUNGBINH FROM `prodcts_sale` JOIN categories on prodcts_sale.categories_id = categories.id GROUP BY categories.name";
            $sql = "SELECT * FROM `statistical` WHERE booking_date BETWEEN '2021/12/29' AND '2022/01/03' ORDER BY booking_date ASC";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $i = 0;
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $key) {
                $char_data [] = array(
                    'year' => $key['booking_date'],
                    'order' => $key['orders'],
                    'sales' => $key['turnover'],
                    'quantity' => $key['quantity'],
                    'kim' => "huynguyen"
                    
                );
            };
            echo $data = json_encode($char_data);
    }
}