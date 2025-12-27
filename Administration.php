
<?php
       header("Cache-Control: no-cache, must-revalidate");
       if (session_status() == PHP_SESSION_NONE) session_start();
      
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Admin</title>

    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/admincss.css" />

</head>

<body class="sb-nav-fixed">

    <?php include_once("Shared/adminpagetop.php") ?>

    <div id="layoutSidenav">
        <?php include_once("Shared/adminsidenav.php") ?>

        <div id="layoutSidenav_content">
            <main>                
                <div style="text-align:center;background:rgb(240,240,240); border-radius:3px;">
               <h3 class="text-danger font-weight-bold" style="padding-top:20px;text-shadow: 1px 1px 1px black;">
                        Welcome to Travel Administration
                    </h3>
                    <div class="text-dark" style="font-size: 18px;font-weight:bold;">Here are some tips to help you get started</div>
  
                  <img src="images/admin.jpg" width="200px" height="200px" class="img-fluid img-thumbnail mt-5" />


 <br/><br/><br/><br/><br/><br/>

                    <br/><br/>
                    </div>

             </main>
            <?php include_once("Shared/adminpagebottom.php") ?>
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/adminscripts.js"></script>
</body>
</html>