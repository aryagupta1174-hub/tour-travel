<?php
  include_once("shared/conn.php");

  $name="";
  $email="";
  $address="";
  $number="";
  $username="";
  $password="";
  $gender="";

  if($_SERVER['REQUEST_METHOD']=="POST")
   {
   
        $name=$_POST["name"];
        $email=$_POST["email"];
        $address=$_POST["address"];
        $number=$_POST["number"];
        $username=$_POST["username"];
        $password=$_POST["password"];
        

       $role="customer";

       $sql="insert into login values('$username','$password','$role')";
       mysqli_query($con,$sql) or die("Error");

       $sql1="insert into registration(name,email,address,number) values('$name','$email','$address','$number')";
       mysqli_query($con,$sql1) or die("Error");

       $name="";
       $email="";
       $address="";
       $number="";
       $username="";
       $password="";
     


      header("Location:index.php");
   }

 


?>