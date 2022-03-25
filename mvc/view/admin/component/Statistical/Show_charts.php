<?php require_once('mvc/view/admin/index.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Danh Sách Tài Khoản</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
    <span id = "text-date"></span>
    <div id="chart" style="height: 250px;"></div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
    $(document).ready(function (){
        thongke();
       var char =  new Morris.Area({
        element: 'chart',
        pointStrokeColors: ['#819C79'],
        // pointStrokeColors: ['green'],
        // behaveLikeLine: true,
        xkey: 'year',
        parseTime: false,
        ykeys: ['date','sales','quantity','order','huy'],
        labels: ['Đơn hàng','Doanh Thu','số lượng','mã đơn hàng','đã hủy'],
        });
       function thongke(){
           var text = '365 ngày qua';
           $.ajax({
               url:"showchart",
               method:"POST",
               dataType:"JSON",

               success:function (data) {
                   char.setData(data);
                   $("#text-date").text(text);
               }
           });
       }
    });
    </script>
    <button class ="bg-danger">Lọc Đơn Hàng</button>
    </div>
  </div>
  <script src="public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="public/plugins/jquery-ui/jquery-ui.min.js"></script>
<?php require_once('mvc/view/admin/footer.php'); ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="public/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
   $(document).ready(() => {
    // alert('ok');
    $('.bg-danger').on('click', function () {
      var time = new Date();
      var timenow = time.getFullYear() +'-' +'0'+(time.getMonth()+1) +'-'+time.getDate();
        $.ajax({
                            url: "order_statistics",
                            method:"GET",
                            data:{
                              timenow:timenow,
                            },  
                            success:function(data){
                               if (data == 'ok') {
                                Swal.fire(
                                  'The Internet?',
                                  'Ngày ' + timenow + ' Đã được cập nhập trước đó',
                                  'question'
                                )
                               }
                               if(data == 'tao'){
                                Swal.fire({
                                  position: '',
                                  icon: 'success',
                                  title: 'Đã cập nhập ngày '+timenow+' thành công',
                                  showConfirmButton: false,
                                  timer: 2500
                                })
                               }
                            }
        })
    })
  });
</script>