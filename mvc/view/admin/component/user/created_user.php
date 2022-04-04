<?php require_once('mvc/view/admin/index.php'); ?>
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
              <form action = "created_user" method="POST" enctype="multipart/form-data" id="quickForm" novalidate="novalidate">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">user_name</label>
                    <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">number phone</label>
                    <input type="text" name="number_phone" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="Email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Avatar</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
                  </div>
                  <div class="form__div">
                        <fieldset>
                            <legend>Vai Trò</legend>
                            <label for="">khách hàng</label>
                            <input type="radio" name="vai_tro" id="" value="0">
                            <label for="">Quản trị viên</label>
                            <input type="radio" name="vai_tro" id="" value = "1">
                        </fieldset>
                    </div>
                    <div class="form__div">
                        <fieldset>
                            <legend>trạng thái</legend>
                            <label for="">Kích Hoạt</label>
                            <input type="radio" name="status" id="on">
                            <label for="">khóa</label>
                            <input type="radio" name="status" id="off">
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
$(function () {
  $.validator.setDefaults({

  });
  $('#quickForm').validate({
    rules: {
      user_name: {
        required: true
      },
      number_phone: {
        required: true,
        minlength: 5,
      },
      email: {
        required: true,
        email: true,
      },
      Password: {
        required: true,
        minlength: 5,
      },
      terms: {
        required: true,
      },
    },
    messages: {
      user_name: {
        required: "Please enter a name",
      },
      number_phone: {
        required: "Please enter a number phone",
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
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
