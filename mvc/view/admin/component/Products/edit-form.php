<?php require_once('mvc/view/admin/index.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Cập Nhật Sản Phẩm</h1>
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
              <form id="quickForm" action="update_product" method="POST" enctype="multipart/form-data" >

              <input type="hidden" name="id" value="<?= $result['id'] ?>">
              <div class="card-body">
            
                <div class="form-group">
                <label for="products_name">Loại hàng</label>
                  <select class="form-control" name="categories_id" id="categories_id ">
                    <option value="">Hãy lựa chọn loại hàng</option>
                    <?php foreach ($category as $value): ?>
                      <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                      <?php endforeach ?>
                  </select>
                </div>

                  <div class="form-group">
                    <label for="products_name">Tên sản phẩm</label>
                    <input type="text" name="products_name" class="form-control" id="products_name" value="<?= $result['products_name'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="price">Giá</label>
                    <input type="text" name="price" class="form-control" id="price" value="<?= $result['price'] ?>">
                  </div>
                  <div class="form-group">
    
                  <div class="form-group">
                    <label for="image">Ảnh</label> 
                    <img src="public/img/<?= $result['image'] ?>" width="320px" name = "image_cu">
                    <input type="file" name="image" class="form-control" id="image" value="public/img/<?= $result['image'] ?>">
                  </div>
                      <input type="hidden" name="anhcu" value="<?= $result['image'] ?>">
                  <div class="form-group">
                    <label for="content">Nội dung</label>
                    <textarea name="content" id="content" cols="30" class="form-control" rows="6" value=""><?= $result['content'] ?></textarea>
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cập nhật</button>
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
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
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
