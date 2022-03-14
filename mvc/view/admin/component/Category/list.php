<?php require_once('mvc/view/admin/index.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Danh Sách Loại Hàng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($result as $value): ?>
                    <tr>
                      <td><?= $value['id'] ?></td>
                      <td><?= $value['name'] ?></td>
                      <td><?= $value['slug'] ?></td>
                      <td>
                        <a href="edit_category?id=<?= $value['id'] ?>"><i class="fas fa-edit btn btn-primary" ></i></a>
                        <a href="remove_category?id=<?= $value['id'] ?>"><i class="fas fa-trash-alt btn btn-danger" ></i></a>
                      </td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>

            </div>
    </div>
  </div>
  <script src="<?= PUBLIC_URL ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= PUBLIC_URL ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<?php require_once('mvc/view/admin/footer.php'); ?>