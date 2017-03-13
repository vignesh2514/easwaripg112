<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Easvari PG House</title>
    <link rel="stylesheet" href="css/font-awesome2.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>


<body class="fixed-sn elegant-white-skin">

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-5 login-form mx-auto float-xs-none">

                <!--Form with header-->
                <div class="card">
                    <div class="card-block">

                        <!--Header-->
                        <div class="form-header">
                            <h3><i class="fa fa-lock"></i> Login</h3>
                        </div>
                        <form class="form-horizontal" action="index.php" method="post">

                        <!--Body-->
                        <div class="md-form">
                            <i class="fa fa-envelope prefix"></i>
                            <input type="text" id="form2" name="username" class="form-control" autocomplete="off">
                            <label for="form2">Username</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-lock prefix"></i>
                            <input type="password" id="form4" name="password" class="form-control" autocomplete="off">
                            <label for="form4">Password</label>
                        </div>

                        <div class="text-xs-center">
                            <button class="btn btn-primary" name="submit">Login</button>
                        </div>
</form>
<?php

                  if(isset($_POST['submit']))
                  {

                      if($_POST['username']=="admin" and $_POST['password']=="easvaripg12")
                      {
session_start();
$_SESSION['uname']=$_POST['username'];

                         echo "<script>window.location.href='http://gettalentsapp.com/vignesh2514/eswaripg/admin/home.php';</script>";
                          exit;

                      }
                      else
                      {
                          echo "invalid username or password";
                      }




                  }

                  ?>
                    </div>



                </div>
                <!--/Form with header-->

            </div>
        </div>
    </div>


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>


<!-- Mirrored from mdbootstrap.com/live/_MDB/templates/Admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2017 07:16:47 GMT -->
</html>
