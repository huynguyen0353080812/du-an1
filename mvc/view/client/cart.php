    <div class="container-cart">
        <div class="boxcenter">
            <table class="table">
                <?php
                    cart(1);
                ?>
            </table>
            <div class="row">
                <div class="col-3">
                    <a href="./controller_view.php"><button type="button" class="btn btn-warning">TIẾP TỤC MUA HÀNG</button></a>
                </div>
                <div class="col-5"></div>
                <div class="col-4">
                    <a href="./controller_view.php?act=checkout"><button type="button" class="btn-lg btn-warning">TIẾN HÀNH THANH TOÁN</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>