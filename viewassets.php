<?php
$title ="View All Asset";
  require_once 'inc/sessions.php';
  require_once 'inc/navbar.php';
  require_once 'db/conn.php'; 
  $results = $crud->getAssets();
  $topic ="View All Assets";
 ?>
 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          <h1 class="m-0  text-dark"><?php echo $topic ?></h1>
          <div class="card">
           <div class="card-header bg-primary text-center">View Asset</div>
            <div class="card-body">

                        <section>
                            <table class="table " id="table">
                                <tr>
                                    <th>Asset #</th>
                                    <th>Asset Name</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                  
                                    <th>Actions</th>
                                </tr>
                                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                                <tr>
                                  
                                        <td><?php echo $r['asset_id'] ?></td>
                                        <td><?php echo $r['asset_name'] ?></td>
                                        <td><?php echo $r['category'] ?></td>
                                        <td><?php echo $r['asset_disc'] ?></td>
                                    
                                        <td>
                                            <a href="view.php?asset_id=<?php echo $r['asset_id'] ?>" class="btn btn-primary">View</a>
                                            <a href="edit.php?asset_id=<?php echo $r['asset_id'] ?>" class="btn btn-info">Edit</a>
                                            <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?asset_id=<?php echo $r['asset_id'] ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                </tr> 
                                <?php }?>
                            </table>
                        </section>               
        </div>
    </div>
    <script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
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