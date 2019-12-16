<?php
     
  $topic ="New Category";
  $title ="New Category";
    include_once 'inc/sessions.php';
    include_once 'inc/navbar.php';
    require_once 'db/conn.php'; 
 
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0  text-dark"><?php echo $topic ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $topic ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">

<div>
      
<div class="card">
  <div class="card-header bg-primary">
  <?php echo $title; ?>
  </div>
  <div class="card-body">
    <section>
            <form role="form" action="successcat.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="catname">Category Name:</label>
                    <input type="text" class="form-control" id="catname" placeholder="Enter name of Category" name="catname" required>
                  </div>

                <div class="form-group">
                    <label for="catdesc">Category Description:</label>
                    <input type="text" class="form-control"  placeholder="Enter category description" id="catdesc" required name="catdesc">
                  </div>

                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </section>
    
  </div>
</div>

</div>
         
        </div>
          <!-- /.col-md-6 -->
          
          <div class="col-lg-6">
 

            <div class="sssss">
             
              <div class="card-body">
                
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php 

require_once 'inc/footer.php';

?>