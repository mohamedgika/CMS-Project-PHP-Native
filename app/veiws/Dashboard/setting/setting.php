 
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
             <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        <form action="<?=URL;?>setting/posttitle" method="post">
                    <label for="name">Title Page</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="<?=$title_page;?>"><br>
                  <button type="submit" class="btn btn-success">Update</button>
        </form>
        </div>


       <div class="card-body">
       <form action="<?=URL;?>setting/postheadline" method="post">

       <h2>Headline</h2>
       <textarea id="summernote" name="headline"><?=$headline;?></textarea>
       <input type="submit" value="Update" class="btn btn-success">

       </form><hr>

        <!-- </div> -->
       
        </div>


        <div class="card-body">
       <form action="<?=URL;?>setting/postdetails" method="post">

       <h2>Details</h2>
       <textarea id="summer" name="details"><?=$details;?></textarea><br>
       <input type="submit" value="Update" class="btn btn-success">

       </form>

        <!-- </div> -->
       
        </div>

   </section>
   
   <!-- /.content -->
 </div>

 <?php include VEIWS."Dashboard/layout/footer.php"; ?>