<?php require_once('mvc/view/admin/index.php'); ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">EDIT USER</h1>
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
              <h3 class="card-title">Phân Quyền tài khoản<small> </small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="update_acount" method="POST" enctype="multipart/form-data" id="quickForm" novalidate="novalidate">
                  
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