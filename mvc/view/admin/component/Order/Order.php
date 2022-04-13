<?php require_once('mvc/view/admin/index.php'); ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">LIST ORDER</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Đơn hàng</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>user_name</th>
              <th>phone</th>
              <th>Status</th>
              <th>Đang xử lý</th>
              <th>Đóng gói</th>
              <th>Giao Hàng</th>
              <th>Thành Công</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result as $key => $value): ?>
            <input type="hidden" name="id" value="<?= $value['status'] ?>">
            <tr>
              <td>1.</td>
              <td>
                <?= $value['name'] ?>
              </td>
              <td>
                <?= $value['phone'] ?>
              </td>
              <td class="status">
                <?php 
                $arr = explode("/",$value['status']);
                if ($arr[1] == 'x'):?>
                <?php echo 'xu ly'; ?>
                <?php elseif ($arr[1] == 'y'):?>
                <?php echo 'đóng gói'; ?>
                <?php elseif ($arr[1] == 'z'):?>
                <?php echo 'thanh công'; ?>
                <?php elseif ($arr[1] == 's'):?>
                <?php echo 'đang giao hàng'; ?>
                <?php endif; ?>
              </td>
              <td class="td_status">
                <form action="">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <?php
                                      $arr = explode("/",$value['status']);
                                      if ($arr[1]== 'x') :?>
                      <input type="radio" class="checked" name="age" data-id="<?= $value['id'] ?>/x" value="60" checked>
                      <?php else:?>
                      <input type="radio" class="checked" name="age" data-id="<?= $value['id'] ?>/x" value="60">
                      <?php endif; ?>
                    </div>
                  </div>
              </td>
              <td>
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <?php if ($arr[1]== 'y'): ?>
                    <input type="radio" class="checked" name="age" data-id="<?= $value['id'] ?>/y" value="60" checked>
                    <?php else:?>
                    <input type="radio" class="checked" name="age" data-id="<?= $value['id'] ?>/y" value="60">
                    <?php endif; ?>
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <?php if ($arr[1]== 's'): ?>
                    <input type="radio" class="checked" name="age" data-id="<?= $value['id'] ?>/s" value="60" checked>
                    <?php else:?>
                    <input type="radio" class="checked" name="age" data-id="<?= $value['id'] ?>/s" value="60">
                    <?php endif; ?>
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <?php if ($arr[1]== 'z'): ?>
                    <input type="radio" class="checked" name="age" data-id="<?= $value['id'] ?>/z" value="60" checked>
                    <?php else:?>
                    <input type="radio" class="checked" name="age" data-id="<?= $value['id'] ?>/z" data-status="<?= 's'?>"value="60">
                    <?php endif; ?>
                  </div>
                </div>
                </form>
              </td>
              <td>
                <span class="badge badge-success"><a href="order_detail?id=<?=$value['id']?>"><i class="fas fa-eye"
                      style="color: #ffff;"></i></a></span>
                <span class="badge bg-danger" data-id="<?php echo $value['id']?>"><i
                    class="fas fa-trash-alt"></i></span>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
          <li class="page-item"><a class="page-link" href="#">«</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">»</a></li>x
        </ul>
      </div>
    </div>
  </div>
</div>
<script src="public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="public/js/index.js"></script>
<?php require_once('mvc/view/admin/footer.php'); ?>
<script>

  $('.checked').each((index, data) => {
    data.addEventListener('click', () => {
      var id = $(data).data('id');
      var status = $(data).data('status')
      console.log(status);
      $.ajax({
        url: "update_status",
        method: "GET",
        data: {
          id: id,

        },
        success: function (data) {
          location.reload();
        }
      });
    });
  });
  $('.bg-danger').on('click', function () {
    var id = $(this).data('id');
    $.ajax({
      url: "delete_order",
      method: "GET",
      data: {
        id: id,
      },
      success: function (data) {
        // alert(data);
        location.reload();
      }
    });
  })
</script>