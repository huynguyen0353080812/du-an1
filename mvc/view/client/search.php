<?php 
    require_once('./../../Model/database.php');
    $conn = new databse();
    $conns = $conn->database();

    // var_dump($conns);
    // die;
    if(isset($_GET['search'])){
        $key = $_GET['key'];
        $sql_search = "SELECT * FROM `prodcts_sale` WHERE `products_name` LIKE '%$key%'";
            // var_dump($sql_search);
            // die;
        $stmt = $conns->prepare($sql_search);
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($result);
        // die;
        if($result){
        foreach($result as $value){
            echo($value['products_name']);
        }
        }
        
    }
?>