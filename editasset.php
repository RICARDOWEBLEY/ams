<?php 
    require_once 'db/conn.php';
    //Get values from post operation
    if(isset($_POST['submit'])){
        
        $asset_id = $_POST['asset_id'];
        $assetname = $_POST['assetname'];
        $assetcat = $_POST['assetcat'];
        $assetdesc = $_POST['assetdesc'];
        $assetimg = $_POST['assetimg'];

        $result = $crud->editAssets($asset_id,$assetname, $assetcat, $assetdesc, $assetimg);
        
        if($result){
            header("Location: viewassets.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    }
    else{
        include 'includes/errormessage.php';
    }
    
?>