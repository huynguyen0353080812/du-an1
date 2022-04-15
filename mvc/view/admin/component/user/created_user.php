<?php require_once('mvc/view/admin/index.php'); ?>
<style>
                    .form__div .form-group{
                      display: flex;
                    }
                    #vai_tro-error , #status-error{
                      position: absolute;
                      /* top: initial; */
                      margin-top: 28px;
                      margin-left: 5px;
                    }
              
                  </style>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">CREATE USER</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tạo mới tài khoản<small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action = "created_user" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">user_name</label>
                    <input type="text" name="user_name" class="form-control" id="exampleInputEmail11" placeholder="Nhập Tên">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">number phone</label>
                    <input type="text" name="number_phone" class="form-control" id="exampleInputEmail111" placeholder="Nhập số điện thoại">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="Email" class="form-control" id="exampleInputEmail1111" placeholder="Enter email" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Avatar</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword111111111111 " placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">password_again</label>
                    <input type="password" name="name11" class="form-control" id="exampleInputPassword111111111111" placeholder="Nhập Tên" >
                  </div>
                  <div class="form__div">
                        <fieldset>
                            <legend>Vai Trò</legend>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Khách Hàng</label>
                                <input type="radio" name="vai_tro" class="form-control" id="exampleInputPassword1111111111" placeholder="status" style = "width:50px; height:15px;" value = "0">
                                <label for="exampleInputPassword1">Nhân viên</label>
                                <input type="radio" name="vai_tro" class="form-control" id="exampleInputPassword1111111111" placeholder="status" style = "width:50px; height:15px;" value = "1">
                            </div>
                        </fieldset>
                  </div>
                  <div class="form__div">
                        <fieldset>
                            <legend>Trạng Thái</legend>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kích Hoạt</label>
                                <input type="radio" name="status" class="form-control" id="exampleInputPassword11111111111" placeholder="status" style = "width:50px; height:15px;" value = "on">
                                <label for="exampleInputPassword1">Khóa Tài Khoản</label>
                                <input type="radio" name="status" class="form-control" id="exampleInputPassword11111111111" placeholder="status" style = "width:50px; height:15px;" value = "off">
                            </div>
                        </fieldset>
                        </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div>
    </div>
  </div>

<script src="public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="public/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="public/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/dist/js/demo.js"></script>
<script>
$(function vali () {
  $.validator.setDefaults({
    submitHandler: function () {
      $.ajax({
            url: "list_user",
            method: "GET",
            data: {
              messeger: null,
            },
            success: function (data) {
              location.assign("http://localhost:81/du-an1/list_user?messeger");
            }
          });
    }
  });
  $('#quickForm').validate({
    rules: {
      name11: {
        required: true,
        equalTo: "#exampleInputPassword1"
      },
      user_name: {
        required: true,
      },
      number_phone: {
        required: true,
        minlength: 5
      },
      Email: {
        required: true,
        email: true
      },
      Password: {
        required: true,
        minlength: 5
      },
      vai_tro: {
        required: true,
      },
      status: {
        required: true,
      },
      image: {
        required: true,
        extension: "jpg|csv"
      },
      terms: {
        required: true,
      },
    },
    messages: {
      user_name: {
        required: "làm ơn nhập trường tên!",
      },
      name11: {
        required: "Không được để trống trường password",
        equalTo: "Yêu cầu phải giống như Password trên"
      },
      number_phone: {
        required: "Please enter a number phone",
      },
      Email: {
        required: "không được để Trống Email",
        email: "Please enter a vaild email address"
      },
      Password: {
          required: "Không được để trống trường password",
          minlength: "Độ Dài phải trên 5"
      },
      vai_tro: {
          required: "hãy chọn vai trò",
      },
      status: {
          required: "trạng thái tài khoản",
      },
      image: {
          required: "Hãy Chọn File",
          extension: "định dạng là jpg hoặc PNG"
      },
      terms: "Xác Nhận Điều Này"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
