<?php require_once('mvc/view/admin/index.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">ADD PRODUCT</h1>
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
                <h3 class="card-title">Thêm mới sản phẩm<small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="save_product" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                <div class="card-body">

                <input type="hidden" name="id" value="<?= $result['id'] ?>">

                <div class="form-group">
                <label for="products_name">Loại hàng</label>
                  <select class="form-control" name="categories_id" id="categories_id ">
                    <option value="0">Lựa chọn loại hàng</option>
                    <?= $htmlOption ?>
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
                    <label for="image">Ảnh đại diện</label>
                    <input type="file" name="image" class="form-control" id="image">
                  </div>

                  <div class="form-group">
                    <label for="images[]">Ảnh phụ</label>
                    <input type="file" name="images[]" class="form-control" id="images[]" multiple="multiple">
                  </div>

                  <div class="form-group">
                    <label for="content">Nội dung</label>
                    <textarea name="content" id="content" cols="30" class="form-control" rows="6" placeholder="vui lòng nhập nội dung"></textarea>
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Thêm mới</button>
                  <a href="list_product"><button type="button" class="btn btn-danger">Quay lại</button></a>
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
      categories_id: {
        min: 1
      },
      products_name: {
        required: true
      },
      price: {
        required: true,
        min: 1
      },
      image: {
        required: true
      },
      images: {
        required: true
      },
      content: {
        required: true
      }
    },
    messages: {
      categories_id: {
        min: "Please enter data"
      },
      products_name: {
        required: "Please enter data"
      },
      price: {
        required: "Please enter data",
        min: "Please more than 1"
      },
      image: {
        required: "Please enter data"
      },
      images: {
        required: "Please enter data"
      },
      content: {
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
