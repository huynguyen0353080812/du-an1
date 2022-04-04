<?php
    function loadall_product_view(){
        $sql="select * from prodcts_sale where 1 order by id desc limit 0,9";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($kyw="",$iddm=0){
        $sql="select * from prodcts_sale where 1";
        if($kyw!=""){
            $sql.=" and products_name like '%".$kyw."%' ";
        }
        if($iddm>0){
            $sql.=" and iddm like ".$iddm." ";
        }
        $sql.=" order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function load_sanpham_cungloai($id){
        $sql="select * from prodcts_sale where id <> ".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
?>