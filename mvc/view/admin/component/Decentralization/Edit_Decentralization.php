<?php require_once('mvc/view/admin/index.php'); ?>
<style>
  /* .form-group{
    display: flex;
  } */
  .form-group input{
    margin: 10px 10px;
  }
  .custom-control{
    /* margin:0px 20px; */
  }
</style>
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
  <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Custom Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table>
                  <tr>
                  <th>ok</th>
                  </tr>
                  <tr>
                    <td>huy</td>
                    <td>huy</td>
                    <td>huy</td>
                    <td>huy</td>
                  </tr>
                </table>
                <form action="save_Decentralization" method="post">
                  <!-- <div class="row"> -->
                    <?php foreach ($result as $key => $value):?>
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <label for=""><h5><?php echo $value['name'] ?></h5></label>
                      <div class="form-group">
                        <?php foreach ($result1 as $key => $value1):?>
                          <?php if ($value1['group_id'] == $value['id'] ):?>
                          <div class="custom-control custom-checkbox">
                                  <input 
                                  <?php if (in_array($value1['id'],$checked)):?>
                                    checked = "";
                                  <?php endif;?>
                                  class="custom-control-input" type="checkbox" name = "decentralization[]" id="customCheckbox<?php echo $value1['id'] ?>" value="<?php echo $value1['id'] ?>" style = "margin:0px 20px;">
                            <label for="customCheckbox<?php echo $value1['id'] ?>" class="custom-control-label"><?php echo $value1['name'] ?></label>
                          </div>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      </div>
                    </div>
                    <?php endforeach; ?>
                    <button type="submit">lưu</button>
                </form>
              </div>
              <!-- /.card-body -->
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