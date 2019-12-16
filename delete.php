<?php
    require_once 'inc/auth.php';
    require_once 'db/conn.php';
    if(!isset($_GET['asset_id'])){
        include 'inc/errormessage.php';
        header("Location: viewassets.php");
    }else{
        $id = $_GET['asset_id'];
        
        $result = $crud->deleteAsset($id);
    
        if($result)
        {
            header("Location: viewassets.php");
        }
        else{
            include 'inc/errormessage.php';
        }
    }
?>