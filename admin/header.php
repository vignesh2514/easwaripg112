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
                <img src="img/easvari_logo.png" class="img-fluid rounded-circle">
                <p class="user text-xs-center"><?php echo $_SESSION['uname'];?></p>
            </div>
        </li>
        <!--/. Logo -->

        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                <li><a a href="signup.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-users"></i> CREATE HOSTLERS<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">

                    </div></li>
                <li><a href="analytics.html" class="collapsible-header waves-effect arrow-r"><i class="fa fa-pie-chart"></i> Analytics</a>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-code"></i> Creators<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="signup.php" href="modals.html" class="waves-effect">Modals</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-lock"></i> Forms<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="signup.html" class="waves-effect">Sign up</a>
                            </li>
                            <li><a href="signup%20v2.html" class="waves-effect">Sign up v2</a>
                            </li>
                            <li><a href="login.html" class="waves-effect">Login</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href="clients.html" class="collapsible-header waves-effect arrow-r"><i class="fa fa-users"></i> Clients</a>
                <li><a href="invoice.html" class="collapsible-header waves-effect arrow-r"><i class="fa fa-money"></i> Invoice</a>
                <li><a href="support.html" class="collapsible-header waves-effect arrow-r"><i class="fa fa-support"></i> Support</a>
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
            <p>Easvari PG</p>
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
