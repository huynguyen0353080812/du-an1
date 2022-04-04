<?php
    function loadall_danhmuc(){
        $sql="select * from categories order by id desc";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }
?>