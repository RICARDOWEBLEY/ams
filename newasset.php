<?php
    $title ="New Asset";
    include_once 'inc/sessions.php';
    include_once 'inc/navbar.php';
    require_once 'db/conn.php'; 
    $results = $crud->getCategories();
  
  $topic ="New Asset";
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
  Add New Asset
  </div>
  <div class="card-body">
    <section>
            <form role="form" action="success.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="asset">Asset Name:</label>
                    <input type="text" class="form-control" id="asset" placeholder="Enter asset name" name="assetname" required>
                  </div>

                  <div class="form-group">
                     <label for="assetcat">Asset Category</label>
                      <select class="form-control" id="accescat" name="assetcat" id="assetcat">
                      <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['category_id'] ?>"><?php echo $r['category']; ?></option>
                     <?php }?>
                       </select>
                </div>
                <div class="form-group">
                    <label for="assetdesc">Asset Description:</label>
                    <input type="text" class="form-control"  placeholder="Enter asset description" id="assetdesc" required name="assetdesc">
                  </div>

                  <div class="custom-file">
                     <input type="file" accept="image/*" class="custom-file-input" id="assetimg" name="assetimg" >
                    <label class="custom-file-label" for="assetimg">Choose File</label>
                    <small id="assetimg" class="form-text text-danger">File Upload is Optional</small>
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