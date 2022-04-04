<?php require_once('mvc/view/admin/index.php'); ?>
<link rel="stylesheet" href="http://localhost:81/du-an1/mvc/view/admin/component/Comment/css.css">
<link rel="stylesheet" href="http://localhost:81/du-an1/mvc/view/admin/component/Comment/feedback.js">
<style>
  input{
    /* border: 1px solid red; */
    width:100%;
    outline:none;
    border: none;
    border-bottom: 1px solid #d3cece;
    margin: 10px 0px ;
  }
  /* .modal-content{
    display:none  ;
  } */
</style>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Feedback</h1>
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
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Danh sách phản hồi khách hàng</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>user name</th>
              <th>number_phone</th>
              <th>email</th>
              <th>note</th>
              <th>Trạng Thái</th>
              <th>Phản Hồi Khách Hàng</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($result as $key => $value): ?>
            <tr>
                <td><?= $value['user_name'] ?></td>
                <td><?= $value['number_phone'] ?></td>
                <td><?= $value['email'] ?></td>
                <td><?= $value['note'] ?></td>
                <td>
                  <?php if ($value['status']==1): ?>
                    <button type="button" class="btn btn-danger btn-block btn-sm"><?= 'Chưa Trả Lời'?></button>
                  <?php else: ?>
                    <button type="button" class="btn  bg-success btn-block btn-sm"><?= 'Đã Trả Lời'?></button>
                  <?php endif; ?>
                </td>
                <td>
                  <div class="row">
                    <div class="col-md-3">
                      <button type="button" class="btn btn-default" data-id="<?php echo $value['email'] ?>" id="default" value = "<?php echo $value['user_name'] ?>">
                        send
                      </button>
                    </div>
                  </div>
                </td>
                <td>
                <span class="bg-danger" data-id="<?php echo $value['id']?>"><i class="fas fa-trash-alt btn btn-danger"></i></span>
                </td>
            </tr>     
          <?php endforeach; ?>
          </tbody>
        </table>
         <!-- <div class="modal fade" id="modal-default"> -->
         <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Default Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="">
                            <p>
                              <p class="total"></p>
                              <input type="text" placeholder="to" class="sendto" ><br>
                              <input type="text" placeholder="tiêu đề"  class="tieude" id="tieude"><br>
                              <textarea name="" id="content" class="content" cols="30" rows="10" style = "width:100%;border:none;outline:white;margin-top:10px;" placeholder="Nhập Nội Dung....."></textarea> 
                            </p>
                        </form>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                <!-- </div> -->
      </div>
    </div>
  </div>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="<?= PUBLIC_URL ?>plugins/jquery/jquery.min.js"></script>
<!-- <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<script src="public/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php require_once('mvc/view/admin/footer.php'); ?>
<script>
  $('.btn-default').each((index, data) => {
    data.addEventListener('click',() => {
      $('.modal-content').css("display", "block");
       var id = $(data).data('id');
      $('.sidebar-mini').toggleClass('action1');
      $(".sendto").attr("value",id);
      $('.close').on("click",()=>{
        $('.modal-content').css("display", "none");
        $('.sidebar-mini').removeClass('action1');
      })
    });
  });
  $('.btn-primary').on('click',()=>{
    var sendto = $('.sendto').val();
    var tieude = $('.tieude').val();
    var content = $('#content').val();
    $.ajax({
        url: "Send_Mail",
        method: "GET",
        data: {
          sendto:sendto,
          tieude:tieude,
          content:content
        },
        success: function (data) {
          $('.modal-content').css("display", "none");
          if (data == 'gửi thành công') {
            Swal.fire({
              position: '',
              icon: 'success',
              title: 'Your work has been saved',
              showConfirmButton: false,
              timer: 1500
            }).then((result) => {
                location.reload();
            })
          }
        }
      });
  });
  $('.bg-danger').each((index, data) => {
    data.addEventListener('click',() => {
      var id = $(data).data('id');
      $.ajax({
        url: "delete_feed",
        method: "GET",
        data: {
          id:id
        },
        success: function (data) {
          location.reload();
          // $('.modal-content').css("display", "none");
          // alert(data);
          // if (data == 'gửi thành công') {
          //   Swal.fire({
          //     position: '',
          //     icon: 'success',
          //     title: 'Your work has been saved',
          //     showConfirmButton: false,
          //     timer: 1500
          //   }).then((result) => {
          //       location.reload();
          //   })
          // }
        }
      });
    });
  });
  // $('.bg-danger').on('click',()=>{
  //     var id = $('.bg-danger').data('id');
  //     alert(id);
  // });
</script>