<br>
<footer>
            <div class="image">
                <img src="../../../public/img/footer.webp" alt="" class="image_footer">
            </div>
            <div class="content">
                <div class="logo">
                    <img src="../../../public/img/logo.png" alt="" class="image_logo">
                </div>
                <div class="describe">
                    <div class="block">
                        <ul>
                            <li>KẾT NỐI VỚI CHÚNG TÔI</li>
                            <li>
                                <p>Chúng tôi mong muốn tạo nên hương vị thức uống tuyệt vời nhất. Là điểm đến đầu tiên
                                    dành cho bạn khi muốn thưởng thức trọn vẹn của tách Coffee</p>
                            </li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="block">
                        <ul>
                            <li>HỆ THỐNG CỬA HÀNG</li>
                            <li>
                                <span>Địa chỉ: Ladeco Building, 266 Doi Can</span><br>
                                <span>Street, Ba Dinh District, Ha Noi</span><br>
                                <span>Hotline: 19006750</span><br>
                            </li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="block">
                        <ul>
                            <li>CHÍNH SÁCH</li>
                            <li>
                                <span>Trang chủ</span><br>
                                <span>Giới thiệu</span><br>
                                <span>Sản phẩm</span><br>
                            </li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="block">
                        <ul>
                            <li>LIÊN HỆ</li>
                            <li>
                                <span>Thứ 2 - Thứ 6: 6am - 9pm</span><br>
                                <span>Thứ Bảy - Chủ Nhật: 6am - 10pm</span><br>
                                <span>Mở cửa toàn bộ các ngày trong năm( Chỉ đóng cửa vào ngày lễ)</span><br>
                            </li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="back-to-top">
        <button onclick="back_to_top()" id="back-to-top"><img src="../../../public/img/top.webp" alt="" class="ccc"></button>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper', {
            slidesPerView: 4,
            direction: getDirection(),
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                resize: function () {
                    swiper.changeDirection(getDirection());
                },
            },
        });

        function getDirection() {
            var windowWidth = window.innerWidth;
            var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

            return direction;
        }
    </script>
    <!-- Initialize Swiper -->
    <!-- <script>
        var swiper = new Swiper(".mySwiper_pro", {
          scrollbar: {
            el: ".swiper-scrollbar",
            hide: true,
          },
        });
      </script> -->
    <script>
        var nav = document.querySelector('.header');
        var backToTop = document.querySelector('#back-to-top');
        window.onscroll = function () { scrollFunction() }
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                backToTop.style.display = "block";
                nav.classList.add("show");
            } else {
                backToTop.style.display = "none";
                nav.classList.remove("show");
            }
        }
        scrollFunction();
        function back_to_top() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>