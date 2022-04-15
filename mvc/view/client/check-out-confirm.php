<?php
if (isset($order) && (is_array($order))) {
    extract($order);
}
?>
<br>
<div class="container-product text-center">
    <div class="row ">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">ĐẶT HÀNG THÀNH CÔNG</div>
            <div class="card-body">
                <p class="card-text">MÃ ĐƠN HÀNG: <?= $order['id'] ?></p>
                <p class="card-text">Ngày đặt hàng: <?= $order['created_time'] ?></p>
                <p class="card-text">Tổng đơn hàng: <?= $order['total'] ?></p>
                <p class="card-text">Phương thức thanh toán: COD</p>
            </div>
        </div>
        <br>
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">THÔNG TIN ĐẶT HÀNG</div>
            <div class="card-body">
                <p class="card-text">Người đặt hàng: <?= $order['name'] ?></p>
                <p class="card-text">Địa chỉ: <?= $order['address'] ?></p>
                <p class="card-text">Điện thoại: <?= $order['phone'] ?></p>
            </div>
        </div>
    </div>
</div>