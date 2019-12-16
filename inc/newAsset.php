 <?php
    $title ="New Asset";
  require_once 'sessions.php';
  #require_once 'dashHead.php';
  require_once '../db/conn.php'; 
  $results = $crud->getCategories();


$topic ="New Asset";

 ?>
 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            
          <div class="card">
           <div class="card-header bg-primary text-center">Add new Asset</div>
            <div class="card-body">

            <section>
            <form role="form" action="success.php" method="post">
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

                  <div class="form-group">
                    <label for="exampleInputFile">Asset Image (Optional)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="text" class="custom-file-input" id="assetimg" name="assetimg">
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
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </section>
           
            
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

<?php require_once 'inc/footer.php';