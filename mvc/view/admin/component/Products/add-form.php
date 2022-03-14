<?php require_once('mvc/view/admin/index.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Thêm Sản Phẩm</h1>
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
                <h3 class="card-title">Hãy chắc chắc rằng bạn nhập đúng <small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="save_product" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                <div class="card-body">

                <div class="form-group">
                <label for="products_name">Loại hàng</label>
                  <select class="form-control" name="categories_id" id="categories_id ">
                    <?php foreach ($category as $value): ?>
                      <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                      <?php endforeach ?>
                  </select>
                </div>

                  <div class="form-group">
                    <label for="products_name">Tên sản phẩm</label>
                    <input type="text" name="products_name" class="form-control" id="products_name">
                  </div>

                  <div class="form-group">
                    <label for="price">Giá</label>
                    <input type="text" name="price" class="form-control" id="price">
                  </div>
                  <div class="form-group">
    
                  <div class="form-group">
                    <label for="image">Ảnh</label>
                    <input type="file" name="image" class="form-control" id="image">
                  </div>

                  <div class="form-group">
                    <label for="content">Nội dung</label>
                    <textarea name="content" id="content" cols="30" class="form-control" rows="6" placeholder="vui lòng nhập nội dung"></textarea>
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

<script src="<?= PUBLIC_URL ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= PUBLIC_URL ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="<?= PUBLIC_URL ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= PUBLIC_URL ?>plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= PUBLIC_URL ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= PUBLIC_URL ?>dist/js/demo.js"></script>
<script>
$(function () {
  $.validator.setDefaults({

  });
  $('#quickForm').validate({
    rules: {
      products_name: {
        required: true,
        
      },
      price: {
        required: true,
      },
      content: {
        required: true
      },
    },
    messages: {
      products_name: {
        required: "Please enter data"
      },
      price: {
        required: "Please enter data"
      },
      content: "Please enter data"
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
