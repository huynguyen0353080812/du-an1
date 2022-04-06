<?php require_once('mvc/view/admin/index.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">UPDATE CATEGORY</h1>
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
                <h3 class="card-title">Cập nhật danh mục<small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="update_category" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                <div class="card-body">

                  <input type="hidden" name="id" value="<?= $result['id'] ?>">
                  
                  <div class="form-group">
                    <label for="name">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?= $result['name'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="select">Parent</label>
                    <select name="select" class="form-control" id="">
                    <option value="0">Lựa chọn loại hàng</option>
                    <?= $htmlOption ?>
                    </select>
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

  <?php require_once('mvc/view/script.php'); ?>
<script>
$(function () {
  $.validator.setDefaults({

  });
  $('#quickForm').validate({
    rules: {
      name: {
        required: true,
        
      },
      slug: {
        required: true,
      }

    },
    messages: {
      name: {
        required: "Please enter data"
      },
      slug: {
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
