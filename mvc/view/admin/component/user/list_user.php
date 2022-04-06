<?php require_once('mvc/view/admin/index.php'); ?>
<link rel="stylesheet" href="<?= PUBLIC_URL ?>plugins/fontawesome-free/css/all.min.css">
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">LIST USER</h1>
        </div>

      </div>
    </div>
  </div>
  <div class="content">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Danh sách tài khoản</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>user name</th>
              <th>Email</th>
              <th>Avatar</th>
              <th>vai tro</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result as $key => $value): ?>
            <tr>
              <td>
                <?= $value['user_name'] ?>
              </td>
              <td>
                <?= $value['email'] ?>
              </td>
              <td><img src="public/img/<?= $value['image'] ?>" class="user_image" style="width:50px"></td>
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
                <span><a href="Edit_acount?id=<?=$value['id']?>"><i class="fas fa-edit btn btn-primary"></i></a></span>
                <?php 
                $sss = $RegexResults->checkPrivilege('Delete_acount');
                if ($sss):
                ?>
                <span class="bg-danger" data-id="<?php echo $value['id']?>"><i class="fas fa-trash-alt btn btn-danger"></i></span>
                <?php 
                endif; 
                ?>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>
<script src="<?= PUBLIC_URL ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="public/plugins/jquery-ui/jquery-ui.min.js"></script>
<?php require_once('mvc/view/admin/footer.php'); ?>
<?php if (isset($_GET['messeger'])):?>
<script>
  Swal.fire({
    // position: 'top-end',
    icon: 'success',
    title: 'Your work has been saved',
    showConfirmButton: false,
    timer: 2000
  })
</script>
<?php endif; ?>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis", "edit"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  $(document).ready(() => {
    // alert('ok');
    $('.bg-danger').on('click', function () {
      var id = $(this).data('id');
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: "Delete_acount",
            method: "GET",
            data: {
              id: id,
            },
            success: function (data) {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              ).then((result) => {
                if (result.isConfirmed) {
                  location.reload();
                }
              })

            }
          });
        }
      })
    })
  });
</script>