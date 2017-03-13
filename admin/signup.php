<?php
session_start();
 $_SESSION['uname'];
 include 'myconn.php';
if(empty($_SESSION['uname']))
{
  header("location:index.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Easvari PG</title>

    <!-- Meta OG -->
    <meta property="og:title" content="Premium Admin Templates Dashboard">
    <meta property="og:description" content="Clear and intuitive data categorization coming along with unique and user friendly layout.">
    <meta property="og:image" content="../../../../img/Live/MDB/dashboard-na-fb-share.jpg">
    <meta property="og:url" content="analytics.html">
    <meta property="og:site_name" content="mdbootstrap.com">
    <!-- /Meta OG -->

    <!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="Clear and intuitive data categorization coming along with unique and user friendly layout." />
	<meta name="twitter:title" content="Premium Admin Templates Dashboard" />
	<meta name="twitter:site" content="@MDBootstrap" />
	<meta name="twitter:image" content="../../../../img/Live/MDB/dashboard-na-fb-share.jpg" />
	<meta name="twitter:creator" content="@MDBootstrap" />
	<!-- /Twitter Card -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome2.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

</head>

    <body class="fixed-sn elegant-white-skin">

      <?php include "includes/header.php" ?>

        <!--Double Navigation-->
              <!--/Double Navigation-->

        <!--Main layout-->
        <main class="">
            <div class="container-fluid">

              <div class="col-md-6 col-lg-5 login-form mx-auto float-xs-none">

                  <!--Form with header-->
                  <div class="card">
                      <div class="card-block">

                          <!--Header-->
                          <div class="form-header">
                              <h3><i class="fa fa-lock"></i> Create New Hostlers:</h3>
                          </div>
                          <form action="#" method='post' enctype="multipart/form-data">

                          <!--Body-->
                          <div class="md-form">
                              <i class="fa fa-bed prefix"></i>
                              <input type="number" id="form1" class="form-control" name="rn">
                              <label for="form1">Room No:</label>
                          </div>

                          <div class="md-form">
                              <i class="fa fa-user prefix"></i>
                              <input type="text" id="form2" class="form-control" name="na">
                              <label for="form2">Name</label>
                          </div>

                          <div class="md-form">
                              <i class="fa fa-phone-square prefix"></i>
                              <input type="number" id="form4" class="form-control" pattern="[789][0-9]{9}" name="mn">
                              <label for="form4">Mobile Number</label>
                          </div>
                          <div class="text-xs-center">
                              <button class="btn btn-primary" name="submit">Create Hostlers</button>
                          </div>
</form>
<?php
                    if(isset($_GET['yes'])==1)
                    {
                        echo '<div class="alert alert-info alert-dismissable">                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>                            <i class="fa fa-info-circle"></i>  <strong>Successfully Added...</strong>             </div>';

                    }
                    if(isset($_POST['submit']))
                    {
                                            $roomno=$_POST['rn'];
$name=$_POST['na'];
$monum=$_POST['mn'];
$cre_at=$_POST['ca'];

date_default_timezone_set("Asia/Calcutta");
$today_date=date("Y-m-d");
$sql = "insert into eswaripghome (roomno,name,monum,created_at) values ('$roomno','$name','$monum','$today_date')";
$res = mysqli_query($con,$sql);

                        header("location:signup.php?yes=1");

                        exit;
                    }

                    ?>



                      </div>


                  </div>
                  <!--/Form with header-->

              </div>



                <!--/Classic admin cards-->


            </div>
        </main>
        <!--/Main layout-->


        <!-- SCRIPTS -->

        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

        <script>
            $("#navigation").load("components/navigation.html");
        </script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/tether.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>

        <script>
            $(function() {
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [{
                        label: "My First dataset",
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(0,0,0,.15)",
                        data: [65, 59, 80, 81, 56, 55, 40],
                        backgroundColor: "#4CAF50"
                    }, {
                        label: "My Second dataset",
                        fillColor: "rgba(255,255,255,.25)",
                        strokeColor: "rgba(255,255,255,.75)",
                        pointColor: "#fff",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(0,0,0,.15)",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }]
                };


                var dataPie = [{
                    value: 300,
                    color: "#F7464A",
                    highlight: "#FF5A5E",
                    label: "Red"
                }, {
                    value: 50,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: "Green"
                }, {
                    value: 100,
                    color: "#FDB45C",
                    highlight: "#FFC870",
                    label: "Yellow"
                }]

                var option = {
                    responsive: true,
                    // set font color
                    scaleFontColor: "#fff",
                    // font family
                    defaultFontFamily: "'Roboto', sans-serif",
                    // background grid lines color
                    scaleGridLineColor: "rgba(255,255,255,.1)",
                    // hide vertical lines
                    scaleShowVerticalLines: false,
                };

                // Get the context of the canvas element we want to select
                var ctx = document.getElementById("sales").getContext('2d');
                var myLineChart = new Chart(ctx).Line(data, option); //'Line' defines type of the chart.

                // Get the context of the canvas element we want to select
                var ctx = document.getElementById("conversion").getContext('2d');
                var myRadarChart = new Chart(ctx).Radar(data, option);

                // Get the context of the canvas element we want to select
                var ctx = document.getElementById("traffic").getContext('2d');
                var myBarChart = new Chart(ctx).Bar(data, option);

                // Get the context of the canvas element we want to select
                var ctx = document.getElementById("seo").getContext('2d');
                var myPieChart = new Chart(ctx).Pie(dataPie, option);

            });
        </script>

        <script>
            $(function() {
                $('.min-chart#chart-sales').easyPieChart({
                    barColor: "#4caf50",
                    onStep: function(from, to, percent) {
                        $(this.el).find('.percent').text(Math.round(percent));
                    }
                });
            });
        </script>

        <script>
            // Data Picker Initialization
            $('.datepicker').pickadate();


            // Material Select Initialization
            $(document).ready(function() {
                $('.mdb-select').material_select();
            });

            // Sidenav Initialization
            $(".button-collapse").sideNav();

            // Tooltips Initialization
            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>

        <script type="text/javascript">

        // show/hide customizer
        $('#toggle').click(function(e) {
            e.preventDefault();
            $('#customizer').toggleClass('visible');
        });

        // change skin
        $('a[data-skin]').on('click', function(e) {
            e.preventDefault();

            // remove old class
            document.body.className = document.body.className.replace(/(?:(\w+)-?)(\w+)-(skin)/g,"");

            // add new class
            $('body').addClass($(this).attr("data-skin") + '-skin');

            // trigger toggle button
            $('#toggle').trigger('click');
        });

        </script>

    </body>


<!-- Mirrored from mdbootstrap.com/live/_MDB/templates/Admin/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2017 07:15:18 GMT -->
</html>
