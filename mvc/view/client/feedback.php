<?php include_once("mvc/view/client/layout.php"); ?>
<link rel="stylesheet" href="<?= PUBLIC_URL ?>css/contac.css">
    <main>
        <article>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59620.654919209584!2d106.28940882742232!3d20.940828577668995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31359b46ef2fba69%3A0x2c3c5975d0eceb2e!2zSOG6o2kgRMawxqFuZywgSGFpIER1b25nLCBWaWV0bmFt!5e0!3m2!1sen!2sus!4v1623228098925!5m2!1sen!2sus"
                width="100%" height="450" style="border:0;background: none;" frameborder="0"></iframe>
            <div class="content1">
                <div class="smallcontent">
                    <div class="registration">
                        <form action="Send_Feedback" method = "POST" class="bang">
                            <div class="taital">
                            <P class="chu">Nhập Thông Tin <br> <span class="chu5">Mọi Thắc Mắc của khách hàng sẽ được chúng tôi trả lời sớm nhất</span><br>
                            <span class="chu5">! Hãy điền phần bên dưới.</span></P>
                            </div>
                            <p>Tên Của Bạn</p><input type="text" placeholder="Nhập Tên" class="the" id="masv"name = "user_name"><br>
                            <p>Số Điện Thoại </p><input type="text" placeholder="Số Điện Thoại" class="the" id="name" name="phone">
                            <br>
                            <p>Email</p><input type="email" placeholder="Bạn hãy nhập Email" class="the" id="email" name="email" required>
                            <br>
                            <p>Note</p><textarea id="" cols="67" rows="5" placeholder="Hãy Nhập Những Chia Sẻ" name ="note"></textarea>
                            <button>Gửi Ngay</button>
                        </form>
                    </div>
                </div>
            </div>
        </article>
    </main>
<?php include_once("mvc/view/client/footer.php"); ?>