
<?php

$name1 = $_POST["name1"];
$email =  $_POST["email"];
//validating an integer.
$mobile = filter_input(INPUT_POST, "mobile", FILTER_VALIDATE_INT);
$companyname =  $_POST["companyname"];
$comment =   $_POST["comment"];



//Client side validation.
 if( !$name1){
   die("name is required");
 }

 if( !$mobile){
   die("mobile is required");
 }
 if( !$email){
   die("email is required");
 }
         //Connecting to our database
      $mysqli   =  include "Etonki-dbconnect.php";


   //Inserting a new record
   
     $sql = "INSERT INTO etonkitell (name1, email, mobile, companyname, comment)
         VALUES(?, ?, ?, ?, ?)";


      $stmt =  mysqli_stmt_init($conn);

     if(!mysqli_stmt_prepare($stmt, $sql)){
      die(mysqli_error($conn));
     }

     //binding values.
     mysqli_stmt_bind_param($stmt, "ssiss",
           $name1,
           $email,
           $mobile,
           $companyname,
           $comment);


           mysqli_stmt_execute($stmt);

          include "send-mail.php";
          
     
     

   


      























































?>