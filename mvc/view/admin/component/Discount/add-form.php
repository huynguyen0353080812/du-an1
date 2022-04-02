<?php require_once('mvc/view/admin/index.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">CREATE DISCOUNT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
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
                <h3 class="card-title">Tạo mã giảm giá mới<small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="save_discount" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                <div class="card-body">

                  <div class="form-group">
                    <label for="name">Tên mã</label>
                    <input type="text" name="name" class="form-control" id="name">
                  </div>

                  <div class="form-group">
                    <label for="code">CODE</label>
                    <input type="text" name="code" class="form-control" id="code">
                  </div>

                  <div class="form-group">
                    <label for="discount_number">Giảm</label>
                    <input type="number" name="discount_number" class="form-control" id="discount_number">
                  </div>
    
                  <div class="form-group">
                    <label for="quantity">Số lượng</label>
                    <input type="number" name="quantity" class="form-control" id="quantity" placeholder="0">
                  </div>

                  <div class="form-group">
                    <label for="begin">Ngày bắt đầu</label>
                    <input type="date" name="begin" class="form-control" >
                  </div>

                  <div class="form-group">
                    <label for="finish">Ngày kết thúc</label>
                    <input type="date" name="finish" class="form-control" >
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Thêm mới</button>
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
  <?php require_once('mvc/view/admin/footer.php'); ?>
  <?php require_once('mvc/view/script.php'); ?>

  <script>
$(function () {
  $.validator.setDefaults({

  });
  $('#quickForm').validate({
    rules: {
      name: {
        required: true
      },
      code: {
        required: true
      },
      quantity: {
        required: true
      },
      discount_number: {
        required: true,
        max: 100
      },
      begin: {
        required: true
      },
      finish: {
        required: true
      }
    },
    messages: {
      name: {
        required: "Please enter data"
      },
      code: {
        required: "Please enter data"
      },
      quantity: {
        required: "Please enter data"
      },
      discount_number: {
        required: "Please enter data",
        max: "No more than 100%"
      },
      begin: {
        required: "Please enter data"
      },
      finish: {
        required: "Please enter data"
      }
    
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
