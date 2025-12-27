<?php

include_once("shared/conn.php");

 
if($_SERVER['REQUEST_METHOD']=="POST")
     {
            $place=$_POST["place"];
            $member=$_POST["member"];
            $arrivals=$_POST["arrivals"];
            $leaving=$_POST["leaving"];
            
           

    $sql="insert into booknow(place,member,arrivals,leaving)	values('$place','$member','$arrivals','$leaving')";

      mysqli_query($con,$sql) or die("Error:");

    
           $place="";
            $member="";
            $arrivals="";
            $leaving="";


header("Location:index.php");

 }

else
     {
        $flag=$_GET["flag"];

          if($flag=="d")

            if(isset($_GET["Id"]))
                
               $Id=$_GET["Id"];
   
               $sql="Delete from booknow where id=$Id";
               mysqli_query($con,$sql) or die("Error");
       
         header("Location:booknowdetails.php");

     }

  ?>  