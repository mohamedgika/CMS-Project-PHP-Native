 
 <?php include VEIWS."Dashboard/layout/header.php"; ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=URL;?>Dashboard/index">Dashboard</a></li>
              <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><a  class="btn btn-block btn-success" href="<?=URL;?>category/add">Add New Category</a></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

        <!-- // Borderd Table -->
        <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Name</th>
                      <th>Update</th>
                      <th style="width: 40px">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($categories as $category):?>
                    <tr>
                      <td><?= $category['id'];?></td>
                      <td><?= $category['name'];?></td>
                      <td width="50px"><a href="update/<?= $category['id'];?>"><button type="button" class="btn btn-block btn-outline-info btn-sm ">Update</button></a></td>
                      <td width="50px"><a href="delete/<?= $category['id'];?>"><button type="button" class="btn btn-block btn-outline-danger btn-sm">Delete</button></a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>


      </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

  <?php include VEIWS."Dashboard/layout/footer.php"; ?>