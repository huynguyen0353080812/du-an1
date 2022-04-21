<?php require_once('mvc/view/admin/index.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">LIST PRODUCT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Danh sách sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Views</th>
                      <th>Img</th>
                      <th>Categories</th>
                      <th>Content</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($result as $value): ?>
                    <tr>
                      <td><?= $value['id'] ?></td>
                      <td><?= $value['products_name'] ?></td>
                      <td><?= $value['price'] ?></td>
                      <td><?= $value['view'] ?></td>
                      <td><img src="public/img/<?= $value['image'] ?>" width="100px"></td>
                      <td><?= $value['categories_id'] ?></td>
                      <td><?= $value['content'] ?></td>
                      <td>
                        <a href="edit_product?id=<?= $value['id'] ?>"><i class="fas fa-edit btn btn-primary" ></i></a>
                        <a href="remove_product?id=<?= $value['id'] ?>" onClick="return confirm('Bạn thực sự muốn xóa')"><i class="fas fa-trash-alt btn btn-danger" ></i></a>
                      </td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                <?php if ($current_page > 3):?>
                  <a href="?per_page=<?php echo $item_perpage ?>&page=1"><i class="fas fa-angle-double-left"></i></a>
              <?php endif; ?>
              <div id="countpage">
                  <?php for($i=1; $i <= $countotal; $i++):?>
                      <?php if ($i != $current_page): ?>
                          <?php if ($i > $current_page - 3 && $i < $current_page + 3) : ?>
                              <!-- lấy ra số lượng bản thỏa mãn điều kiện trên -->
                              <a class = "count" class="page-link" href="?per_page=<?php echo $item_perpage ?>&page=<?php echo $i ?>"><?php echo $i ?></a>
                              <?php endif; ?>
                      <?php else: ?>
                          <strong><?php echo $i ?></strong>
                      <?php endif; ?>
                  <?php endfor; ?>
                  <?php if ($current_page < $countotal - 3):?>
                      <a href="?per_page=<?php echo $item_perpage ?>&page=<?php echo $countotal ?>"><i class="fas fa-angle-double-right"></i></a>
                  <?php endif; ?>
                </table>
              </div>

            </div>
    </div>
  </div>
  <script src="<?= PUBLIC_URL ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= PUBLIC_URL ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<?php require_once('mvc/view/admin/footer.php'); ?>