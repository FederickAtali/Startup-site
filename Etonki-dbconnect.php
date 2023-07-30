<!--Object oriented method of connecting to a 
database in php procedural connecton.-->

<?php

$host = "localhost";
$dbname = "etonki";
$username = "root";//only recommeded when developing locally.
$password = "";

 
$conn = mysqli_connect(hostname:$host,
                     username:  $username,
                     password:  $password,
                     database: $dbname); 

          
//The connect  error number property of the mysqli object
//is set to an error code from the most recent connection attempt
//if there was no error, this is zero.
if(mysqli_connect_error()){
    die("connection error:" . $mysqli -> connect_error);//print out the error if any.
}
else{
    //echo "connect Successfully!.";
}
?>