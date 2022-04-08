<?php
    function loadall_product_view(){
        // $sql="select * from prodcts_sale where 1 order by id desc limit 0,9";
        $sql="select * from prodcts_sale where 1 order by id desc";
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
    function cart($del){
        $i=0;
        $tong=0;
        if($del==1){
            $xoasp_th='<th>Thao tác</th>';
            $xoasp_td2='<td></td>';
        }else{
            $xoasp_th='';
            $xoasp_td2="";
        }
        echo '<thead class="thead-warning">
                <tr>
                    <th>Sản phẩm</th>
                    <th>Hình</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    '.$xoasp_th.'
                </tr>
            </thead>';
        foreach ($_SESSION['mycart'] as $cart) {
            global $img_path;
            $hinh = $img_path.$cart[2];
            $ttien=$cart[3]*$cart[4];
            $tong+=$ttien;
            if($del==1){
                $xoasp_td='<td><a href="controller_view.php?act=delcart&idcart='.$i.'"><input type="button" class="btn btn-danger" value="Xóa"></a></td>';
            }else{
                $xoasp_td="";
            }
            echo '<tbody id="giohang">
                <tr>
                    <td>'.$cart[1].'</td>
                    <td><img src="'.$hinh.'"></td>
                    <td>'.$cart[3].'</td>
                    <td>'.$cart[4].'</td>
                    <td>'.$ttien.'</td>
                    '.$xoasp_td.'
                </tr>
                </tbody>';
            $i+=1;
        }
        echo '  <tbody id="tongdonhang">
                    <tr>
                        <td colspan="4">Tổng đơn hàng</td>
                        <td>'.$tong.'</td>
                        '.$xoasp_td2.'
                    </tr>
                </tbody>';
    }
?>