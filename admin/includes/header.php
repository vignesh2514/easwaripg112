<?php
session_start();
 $_SESSION['uname'];
 include 'myconn.php';

if(empty($_SESSION['uname']))
{
  header("location:index.php");
}
 ?>
<header>

    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav fixed custom-scrollbar">

        <!-- Logo -->
        <li>
            <div class="user-box">
              <a href="home.php">  <img src="img/easvari_logo.png" class="img-fluid rounded-circle"></a>
              <br>
                <p class="user text-xs-center">Easvari PG</p>
                <br>
            </div>
        </li>
        <!--/. Logo -->

        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                <li><a href="signup.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-users"></i> Create Hostlers</a>
                  </li>
                <li><a href="all_day.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-pie-chart"></i>Day wise Report</a></li>
                <li><a href="all_month.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-pie-chart"></i>Month wise Report</a></li>
                <li><a href="all_year.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-pie-chart"></i>Year wise Report</a></li>
                <li><a href="custom_report.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-pie-chart"></i>Custom Report</a></li>

            </ul>
        </li>
        <!--/. Side navigation links -->

    </ul>
    <!--/. Sidebar navigation -->

    <!--Navbar-->
    <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">

        <!-- SideNav slide-out button -->
        <div class="pull-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
        </div>

        <!-- Breadcrumb-->
        <div class="breadcrumb-dn">
            <p><?php echo $_SESSION['uname'];?></p>
        </div>


        <ul class="nav navbar-nav pull-right">


            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i><?php echo $_SESSION['uname'];?> </a>
                <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>

    </nav>
    <!--/.Navbar-->

</header>
