<?php include VEIWS."Dashboard/layout/header.php"; ?>

<div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$title;?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=URL;?>Dashboard/index">Dashboard</a></li>
              <li class="breadcrumb-item active"><?=$title;?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="row">
    <!-- Main content  Post 1 -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Post 1</h3>

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

            <form action="<?=URL?>post/postadd_1" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="title_1">Post Title</label>
                    <textarea name="title_1"  class="form-control"  rows="1"><?=$title_post_1;?></textarea>
                  </div>

                  <div class="form-group">
                        <label>Description</label>
                        <textarea name="description_1" class="form-control" rows="3"><?=$description_1?></textarea>
                  </div>

                  <div class="form-group">
                        <label>Category_Id</label>
                        <select name="category_1" class="form-control">
                          <?php foreach($category_1 as $cat): ?>
                          <option><?=$cat['id']," - ",$cat['name'];?></option>
                          <?php endforeach; ?>
                        </select>
                   </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="img_1" type="file"  class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile"><?=$image_1;?></label>
                      </div>
                    </div>
                </div>

                <button type="submit" value="Update" class="btn btn-primary">Submit</button>
            </form>
              </div>
    </section>


    <!-- Main content  Post 2 -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Post 2</h3>

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


            <form action="<?=URL?>post/postadd_2" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="title_2">Post Title</label>
                    <textarea name="title_2"  class="form-control"  rows="1"><?=$title_post_2;?></textarea>
                  </div>

                  <div class="form-group">
                        <label>Description</label>
                        <textarea name="description_2" class="form-control" rows="3"><?=$description_2?></textarea>
                  </div>

                  <div class="form-group">
                        <label>Category_Id</label>
                        <select name="category_2" class="form-control">
                          <?php foreach($category_2 as $cat): ?>
                          <option><?=$cat['id']," - ",$cat['name'];?></option>
                          <?php endforeach; ?>
                        </select>
                   </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="img_2" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile"><?=$image_2;?></label>
                      </div>
                    </div>
                </div>

                <button type="submit" value="Update" class="btn btn-primary">Submit</button>
            </form>
          </div>
    </section>


    <!-- Main content  Post 3 -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Post 3</h3>

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

            <form action="<?=URL?>post/postadd_3" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="title_3">Post Title</label>
                    <textarea name="title_3"  class="form-control"  rows="1"><?=$title_post_3;?></textarea>
                  </div>

                  <div class="form-group">
                        <label>Description</label>
                        <textarea name="description_3" class="form-control" rows="3"><?=$description_3?></textarea>
                  </div>

                  <div class="form-group">
                        <label>Category_Id</label>
                        <select name="category_3" class="form-control">
                          <?php foreach($category_3 as $cat): ?>
                          <option><?=$cat['id']," - ",$cat['name'];?></option>
                          <?php endforeach; ?>
                        </select>
                   </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="img_3" type="file" class="custom-file-input" id="exampleInputFile" >
                        <label class="custom-file-label" for="exampleInputFile"><?=$image_3;?></label>
                      </div>
                    </div>
                </div>

                <button type="submit" value="Update" class="btn btn-primary">Submit</button>
            </form>
          
          
          </div>
    </section>

    </div>

    <!-- /.content -->
  </div>

<?php include VEIWS."Dashboard/layout/footer.php"; ?>
