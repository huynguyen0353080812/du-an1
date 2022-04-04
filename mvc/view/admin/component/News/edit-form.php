<?php require_once('mvc/view/admin/index.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">EDIT NEWS</h1>
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
                <h3 class="card-title">Cập nhật tin tức<small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="update_news" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                <div class="card-body">

                <input type="hidden" name="now" value="<?= $now ?>">

                <input type="hidden" name="id" value="<?= $result['id'] ?>">

                  <div class="form-group">
                    <label for="title">Chủ đề</label>
                    <input type="text" name="title" class="form-control" id="title" value="<?= $result['title'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" id="description" value="<?= $result['description'] ?>" >
                  </div>

                  <div class="form-group">
                    <input type="hidden" value="<?= $now?>"  name="created_time" id="created_time">
                  </div> 
    
                  <div class="form-group">
                    <label for="content">Nội dung</label>
                    <textarea name="content" id="content" class="form-control" rows="5" ><?= $result['content'] ?></textarea>
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
  <?php require_once('mvc/view/admin/footer.php'); ?>
  <?php require_once('mvc/view/script.php'); ?>
  <script src="public/resources/ckeditor/ckeditor.js"></script>
  <script>
        CKEDITOR.replace('content')
    </script>
  <script>
$(function () {
  $.validator.setDefaults({

  });
  $('#quickForm').validate({
    rules: {
      title: {
        required: true
      },
      description: {
        required: true,
        minlength: 5
      },
      content: {
        required: true
      }
    },
    messages: {
      title: {
        required: "Please enter data"
      },
      description: {
        required: "Please enter data",
        minlength: "Please enter data more than 5 characters"
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
