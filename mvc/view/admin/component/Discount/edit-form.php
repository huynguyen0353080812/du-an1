<?php require_once('mvc/view/admin/index.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">EDIT DISCOUNT</h1>
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
                <h3 class="card-title">Cập nhật mã giảm giá<small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="update_discount" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                <div class="card-body">

                <input type="hidden" name="id" value=<?= $result['id'] ?>>

                  <div class="form-group">
                    <label for="name">Tên mã</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?=$result['name']?>">
                  </div>

                  <div class="form-group">
                    <label for="code">CODE</label>
                    <input type="text" name="code" class="form-control" id="code" value=<?= $result['code'] ?>>
                  </div>

                  <div class="form-group">
                    <label for="discount_number">Giảm</label>
                    <input type="number" name="discount_number" class="form-control" id="discount_number" value="<?= $result['discount_number'] ?>">
                  </div>
    
                  <div class="form-group">
                    <label for="quantity">Số lượng</label>
                    <input type="number" name="quantity" class="form-control" id="quantity" value="<?= $result['quantity'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="begin">Ngày bắt đầu</label>
                    <input type="date" name="begin" class="form-control" value="<?= $result['begin'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="finish">Ngày kết thúc</label>
                    <input type="date" name="finish" class="form-control" value="<?= $result['finish'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="status">Dừng trương trình</label> <br>
                    <a href="change_discount?id=<?= $result['id'] ?>"><button name="status" class=" btn btn-danger" value="Trương trình đã dừng lại" onClick="return confirm('Bạn thực sự muốn dừng trường trình này')">Dừng trương trình</button></a>
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
          <div class="col-md-6">
          </div>
        </div>
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
      discount_number: {
        required: true,
        min: 1,
        max: 100
      },
      quantity: {
        required: true,
        min: 1
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
      discount_number: {
        required: "Please enter data",
        min: "Not less than 1%",
        max: "No more than 100%"
      },
      quantity: {
        required: "Please enter data",
        min: "Not less than 1"
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
