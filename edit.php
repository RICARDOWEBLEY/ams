<?php
    $topic ="Edit Asset";
    $title ="Edit Asset";
    include_once 'inc/sessions.php';
    include_once 'inc/navbar.php';
    require_once 'db/conn.php'; 
    $results = $crud->getCategories();
    
    if(!isset($_GET['asset_id'])){
       include 'inc/errormessage.php';
    #header("location: viewassets.php"); 
    }else{
        $asset_id = $_GET['asset_id'];
        $assets = $crud->getAssetDetails($asset_id);
    }
    
    
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
            <form role="form" action="editasset.php" method="post">
            <input type="hidden" name="asset_id" value="<?php echo $assets['asset_id'] ?>" />
                <div class="card-body">
                  <div class="form-group">
                    <label for="asset">Asset Name:</label>
                    <input type="text" class="form-control" id="asset" placeholder="Enter asset name" name="assetname" value="<?php echo $assets['asset_name'] ?>">
                  </div>

                  <div class="form-group">
                     <label for="assetcat">Asset Category</label>
                      <select class="form-control" id="accescat" name="assetcat" id="assetcat">
                      <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                    <option value="<?php echo $r['category_id'] ?>" <?php if($r['category_id']==$assets['category_id']) echo 'selected'; ?>>
                        <?php echo $r['category'];?>
                    </option>
                     <?php }?>
                       </select>
                </div>
                <div class="form-group">
                    <label for="assetdesc">Asset Description:</label>
                    <input type="text" class="form-control"  placeholder="Enter asset description" id="assetdesc" required name="assetdesc"  value="<?php echo $assets['asset_disc'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="assetimg">Asset Image (Optional)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="assetimg" name="assetimg" value="<?php echo $assets['picture'] ?>">
                        <label class="custom-file-label" for="assetimg">Choose Image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Update</button>
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