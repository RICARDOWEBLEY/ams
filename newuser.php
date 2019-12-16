<?php
     
  $topic ="New User";
  $title ="New User";
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
            <form role="form" action="user.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="firstname">Firstname:</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter firstname of user" name="firstname" required>
                  </div>

                <div class="form-group">
                    <label for="lastname">Lastname:</label>
                    <input type="text" class="form-control"  placeholder="Enter lastname of user" id="lastname" required name="lastname">
                  </div>

                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control"  placeholder="Enter Email address" id="email" required name="email">
                  </div>

                  <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control"  placeholder="Enter Username" id="username" required name="username">
                  </div>


                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control"  placeholder="Enter Password" id="password" required name="password">
                  </div>

                  <label for="picture">User's Image:</label>
                  <div class="custom-file">
                     <input type="file" accept="image/*" class="custom-file-input" id="picture" name="picture" >
                    <label class="custom-file-label" for="picture">Choose User Image</label>
                    <small id="assetimg" class="form-text text-danger">User's Image is optional.</small>
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