<?php

include_once("shared/conn.php");

 
if($_SERVER['REQUEST_METHOD']=="POST")
     {
            $name=$_POST["name"];
            $mail=$_POST["email"];
            $number=$_POST["number"];
            $subject=$_POST["subject"];
            $message=$_POST["message"];
           

    $sql="insert into contact(name,email,number,subject,message)	values('$name','$mail','$number','$subject','$message')";

      mysqli_query($con,$sql) or die("Error:");

    
            $name="";
            $mail="";
            $number="";
            $subject="";
            $message="";


header("Location:index.php");

 }



 else
     {
        $flag=$_GET["flag"];

          if($flag=="d")

            if(isset($_GET["Id"]))
                
               $Id=$_GET["Id"];
   
               $sql="Delete from contact where id=$Id";
               mysqli_query($con,$sql) or die("Error");
       
         header("Location:contactdetails.php");

     }



  

  ?>  