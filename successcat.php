<?php
  
    require_once 'db/conn.php';
    require_once 'inc/header.php';
   # require_once 'sendemail.php';
    if(isset($_POST['submit'])){
        
        //getting values from the $_POST array
        $catname = $_POST['catname'];
        $category_desc = $_POST['catdesc'];
        

        //function to insert and track if success or not
        $isSuccess = $crud->newCategory($catname, $category_desc);
    
        
        if($isSuccess){

            include 'inc/successmessage.php';
            header("refresh:2; url=newcategory.php");
        }
        else{
            include 'inc/errormessage.php';
        }
    }
?>
    