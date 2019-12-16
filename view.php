<?php
    $title ="View ";
    $topic="View";
    include_once 'inc/sessions.php';
    include_once 'inc/navbar.php';
    require_once 'db/conn.php'; 

    if(!isset($_GET['asset_id'])){
        include 'inc/errormessage.php';
    }else{
        $asset_id = $_GET['asset_id'];
        $result= $crud->getAssetDetails($asset_id);
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
  <?php echo $title ?>
  </div>
  <div class="card-body">
  <section>
        <img src="<?php echo empty($result['picture']) ? "uploads/default.png" : $result['picture'] ; ?>" 
        class="rounded-circle" style="width: 200px; height: 200px" />

        <h5 class=""> Name: <?php echo $result['asset_name'] ;?></h5>
        <h5 class=""> Category: <?php echo $result['category'] ;?></h5>
        <h5 class=""> Discription: <?php echo $result['asset_disc'] ;?></h5>

        <a href="viewassets.php" class="btn btn-info"> <b><< Back</b></a>
        <a href="edit.php?asset_id=<?php echo $result['asset_id'] ?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?asset_id=<?php echo $result['asset_id'] ?>" class="btn btn-danger">Delete</a>
        
        

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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
