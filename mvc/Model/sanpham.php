<?php
    function loadall_product_view(){
        $sql="select * from prodcts_sale where 1 order by id desc limit 0,9";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
?>