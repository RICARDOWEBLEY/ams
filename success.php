<?php
  
    require_once 'db/conn.php';
    require_once 'inc/header.php';
   # require_once 'sendemail.php';
    if(isset($_POST['submit'])){
        
        //getting values from the $_POST array
        $assetname = $_POST['assetname'];
        $assetcat = $_POST['assetcat'];
        $assetdesc = $_POST['assetdesc'];
       # $assetimg = $_POST['assetimg'];

        $random1 = rand(1000, 2000); 
        $random2 = rand(3000, 5000);
        $orig_file = $_FILES["assetimg"]["tmp_name"];
        $ext = pathinfo($_FILES["assetimg"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = "$target_dir$assetcat$random$assetname$assetcat$random2.$ext";
        move_uploaded_file($orig_file,$destination);
        
        $isSuccess = $crud->insertAsset($assetname, $assetcat, $assetdesc, $destination);
      
        if($isSuccess){

            #SendEmail::SendMail($email, 'Thank you ' .$_POST['firstname']. ' for registering for the Conference.' , 
           # 'We are looking forward to having you. ' .$_POST['firstname']. ' ' .$_POST['lastname']);
            include 'inc/successmessage.php';
            header("refresh:2; url=newasset.php");
        }
        else{
            include 'inc/errormessage.php';
        }
    }
?>
    