<?php
 $fname   = $_POST['fname'];
 $lname   = $_POST['lname'];
 $email   = $_POST['email'];
 $subject = $_POST['subject'];
 $phone = $_POST['phone'];
 $message = $_POST['message'];

$servername="localhost";
$username="id20683273_mannudata";
$password="Abhimanyu@1978";
$dbname="id20683273_data";
 $con = mysqli_connect($servername,$username,$password,$dbname);
 if(!$con)
 {
     die("Error : ".mysqli_connect_error());
 }else
   {
     $sql="INSERT INTO data(fname,lname,email,subject,phone,message) VALUES('$fname','$lname','$email','$subject','$phone','$message')";
     $done = mysqli_query($con , $sql);
    }

    mysqli_close($con);
?>
