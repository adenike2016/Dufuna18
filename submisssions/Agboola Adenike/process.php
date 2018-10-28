<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$phonenumber = $_POST['phonenumber'];
$gender = $_POST['gender'];
savetodatabase($firstname,$lastname,$email,$password,$confirmpassword,$phonenumber,$gender);
header('Location:sucess.html' );
//function definition of savetodatabase
 function savetodatabase($firstname,$lastname,$email,$password,$confirmpassword,$phonenumber,$gender ){
    $servername="localhost";
    $databasename ="registration";
    $username="root";
    $password="";
    //conect to database registration
    $conn= mysqli_connect($servername,$username,$password,$databasename);
        if (!$conn){
            die( "connection failed" . "mysql connect error");
        }
    $sqlquery = "INSERT into Registration(firstname,lastname,email,password,confirmpassword,phonenumber,gender)
                          VALUES('$firstname','$lastname','$email','$password','$confirmpassword','$phonenumber','$gender', NOW())";
    $result=mysqli_query( $conn,$query);
     if (!$result){ 
         die( "Error :" .$query. mysqli_error($conn) );
     }
 //close connection
 mysqli_close($conn);
}