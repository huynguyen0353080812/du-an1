<?php require_once('mvc/view/admin/index.php'); ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Danh Sách Thống Kê</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Thống kê sản phẩm theo danh mục</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Loại Hàng</th>
              <th>Số lượng</th>
              <th>Gía Cao nhất</th>
              <th>Gía thấp nhất</th>
              <th>GIa trung bình</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result as $key => $value): ?>
            <tr>
              <td>1.</td>
              <td>
                <?= $value['name'] ?>
              </td>
              <td>
                <?= $value['SOLUONG'] ?>
              </td>
              <td>
                <?= $value['gíacao'] ?>
              </td>
              <td>
                <?= $value['giánhỏ'] ?>
              </td>
              <td>
                <?= $value['TRUNGBINH'] ?>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Thống kê Đơn hàng theo ngày </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Số lượng</th>
              <th>Ngày Đặt</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result1 as $key => $value): ?>
            <tr>
              <td>1.</td>
              <td>
                <?= $value['Soluong'] ?>
              </td>
              <td>
                <?= $value['created_time'] ?>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

<script src="public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="public/plugins/jquery-ui/jquery-ui.min.js"></script>
<?php require_once('mvc/view/admin/footer.php'); ?>