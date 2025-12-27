<?php
header("Cache-Control: no-cache, must-revalidate");
if (session_status() == PHP_SESSION_NONE) session_start();

include("Shared/conn.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Contact</title>

    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/admincss.css" />
    <link rel="stylesheet" href="css/style1.css" />
      <link href="css/bootstrap-icons.css" rel="stylesheet">

</head>

<body class="sb-nav-fixed">

    <?php include_once("Shared/adminpagetop.php") ?>

    <div id="layoutSidenav">
        <?php include_once("Shared/adminsidenav.php") ?>

        <div id="layoutSidenav_content">
            <main id="main">                
                
                <div class="container-fluid  mt-3">

                    <div class="row ml-5">
                        <div class="col-12">
                            <h3>Contact Details</h3>
                        </div>
                        
                    </div>

                    <hr />

                    <div class="row table-responsive m-0">
                        <div class="col-md-12" >

                            <?php
     $rs = mysqli_query($con, "SELECT * FROM contact") or die("Query Error: " . mysqli_error($con));
                            $str = "";
                            $Id = 1;

                            while ($row = mysqli_fetch_array($rs)) {
                                $str .= "<tr>
                                    <td>$Id .</td>
                                    <td>$row[1]</td>
                                    <td>$row[2]</td>
                                    <td>$row[3]</td>
                                    <td>$row[4]</td>
                                    <td>$row[5]</td>
                                    <td>
 <a class='btn btn-outline-danger btn-sm' href='contact.php?flag=d&Id=$row[0]' onclick='return confirm(\"Do you want to Delete this Record..?\")'>Delete</a>
                                    </td>
                                 </tr>";
                                $Id++;
                            }
                            $tbl = "";
                            if ($str)
                        {
                                $tbl .= "<table class='table table-bordered '>
                                    <tr class='bg-info text-white text-center'>
                                       <th>S.No.</th>
                                       <th> Name</th>
                                       <th>Email</th>
                                       <th>Number</th>
                                       <th>Subject</th>
                                       <th width='250px'>Message</th>
                                       <th>Delete</th>                                        
                                         
                                    </tr>
                                    $str
                                 </table>";
                            }
                            if ($tbl)
                                echo $tbl;
                            else
                                echo "No Data Found..!!";
                            ?>

                        </div>
                    </div>

                </div>
              </main>
            <?php include_once("Shared/adminpagebottom.php") ?>
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/adminscripts.js"></script>
   <script src="js/main.js"></script>
</body>

</html>