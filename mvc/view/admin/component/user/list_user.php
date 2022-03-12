<?php require_once('mvc/view/admin/index.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Danh Sách Tài Khoản</h1>
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
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>user_name</th>
                      <th>Email</th>
                      <th>Avatar</th>
                      <th>Status</th>
                      <th>Role</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($result as $key => $value): ?>
                      <tr>
                        <td>1.</td>
                        <td><?= $value['user_name'] ?></td>
                        <td><?= $value['email'] ?></td>
                        <td>
                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                              <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox">
                                <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample"/>
                              </a>
                            </div>
                        </td>
                        <td><?= $value['status'] ?></td>
                        <td>
                        <?php   
                                    if ($value['role']==1) {
                                        echo $vai_tro = 'quản trị viên';
                                    }else {
                                        echo $vai_tro = 'khách hàng';
                                    } 
                                ?>
                        </td>
                        <td>
                          <span class="badge badge-success"><a href="Edit_acount?id=<?=$value['id']?>"><i class="fas fa-edit" style = "color: #ffff;"></i></a></span>
                          <span class="badge bg-danger"><a href="Delete_acount?id=<?=$value['id']?>"><i class="fas fa-edit"></i></a></span>
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
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>
    </div>
  </div>
  <script src="public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="public/plugins/jquery-ui/jquery-ui.min.js"></script>
<?php require_once('mvc/view/admin/footer.php'); ?>