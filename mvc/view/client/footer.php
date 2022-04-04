<div class="footer">
    <div class="container">
        <div class="logo">
            <a href="./index.html"><img src="./img/logo.png" alt=""></a>
        </div>
        <div class="infor-footer">
            <div class="footer-item">
                <h3>Kết nối với chúng tôi</h3>
                <p>Chúng tôi mong muốn tạo nên hương vị thức uống tuyệt vời nhất. Là điểm đến đầu tiên dành cho bạn
                    khi muốn thưởng thức trọn vẹn của tách Coffee</p>
            </div>
            <div class="footer-item">
                <h3>Kết nối với chúng tôi</h3>
                <p>Chúng tôi mong muốn tạo nên hương vị thức uống tuyệt vời nhất. Là điểm đến đầu tiên dành cho bạn
                    khi muốn thưởng thức trọn vẹn của tách Coffee</p>
            </div>
            <div class="footer-item">
                <h3>Kết nối với chúng tôi</h3>
                <p>Chúng tôi mong muốn tạo nên hương vị thức uống tuyệt vời nhất. Là điểm đến đầu tiên dành cho bạn
                    khi muốn thưởng thức trọn vẹn của tách Coffee</p>
            </div>
            <div class="footer-item">
                <h3>Kết nối với chúng tôi</h3>
                <p>Chúng tôi mong muốn tạo nên hương vị thức uống tuyệt vời nhất. Là điểm đến đầu tiên dành cho bạn
                    khi muốn thưởng thức trọn vẹn của tách Coffee</p>
            </div>
        </div>



    </div>
</div>
<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>
</body>

</html>