<?php
  
    require_once 'db/conn.php';
    require_once 'inc/header.php';
    require 'mail.php';
    if(isset($_POST['submit'])){
        
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        # $picture = $_POST['picture'];

        $random1 = rand(5000, 20000); 
        $random2 = rand(3000, 5000);

        $orig_file = $_FILES["picture"]["tmp_name"];
        $ext = pathinfo($_FILES["picture"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'img/';
        $destination = "$target_dir$firstname$random1$email.$ext";
        move_uploaded_file($orig_file,$destination);
        
        
        $isSuccess = $crud->insertUser($firstname, $lastname, $email, $username, $password, $destination);
    
      
        if($isSuccess){

            Mail::SendMail($email, 'Hello! ' .$_POST['firstname']. ' You were regestered on Smart AMS' , 
            'We are looking forward to having you. ' );
            include 'inc/successmessage.php';
            header("Location: newuser.php");
        }
        else{
            include 'inc/errormessage.php';
        }
    }
?>
    