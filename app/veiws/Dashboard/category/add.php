 
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
        
       <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Category Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="postadd" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Category">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </form>
            </div>
       
        </div>
     </div>
     <!-- /.card -->

   </section>
   <!-- /.content -->
 </div>

 <?php include VEIWS."Dashboard/layout/footer.php"; ?>