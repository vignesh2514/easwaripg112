
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


                <section class="section">

                  <div class="row">

                      <div class="col-md-12">
                          <!--Card-->
                          <div class="card card-cascade narrower">

                              <!--Admin panel-->
                              <div class="admin-panel indigo-admin-panel">

                                  <!--Second row-->
                                  <div class="row m-b-0">
                                      <!--First column-->
                                      <div class="col-md-12">

                                          <!--Panel content-->
                                          <div class="card-block p-y-0">

                                              <!--Table-->
                                              <table class="table table-hover cascading-table m-b-0">
                                                  <!--Table head-->
                                                  <thead>
                                                      <tr>
                                                        <th>Room no</th>
                                                        <th>Name</th>
                                                          <th>Mobile Number</th>
                                                          <th>Old Amount</th>
                                                          <th>New Amount</th>
                                                          <th>Date</th>
                                                          <th>Time</th>

                                                      </tr>
                                                  </thead>
                                                  <!--/Table head-->

                                                  <!--Table body-->
                                                  <tbody>
                                                    <?php

                                                    date_default_timezone_set("Asia/Calcutta");
                                                    $tod=date("Y");
                                                  $sql="select * from epg_mem where year(cr_at)='$tod' ORDER BY timeg DESC";

                                                  $result=mysqli_query($con,$sql);
                                                  while($row=mysqli_fetch_array($result))
                                                  {
                                                    $monum=$row['monum'];
                                                    $sqln="select * from eswaripghome where monum='$monum' ";
                                                    $resultn=mysqli_query($con,$sqln);
$rown=mysqli_fetch_array($resultn);
                                                  ?>
                                                  <tr>
                                                    <td ><?php echo $rown['roomno'];?></td>
                                                    <td ><?php echo $rown['name'];?></td>
                                                  <td ><?php echo $row['monum'];?></td>
                                                  <td ><?php echo $row['oamt'];?></td>
                                                  <td ><?php echo $row['namt'];?></td>
                                                  <td ><?php echo $row['cr_at'];?></td>
                                                  <td ><?php echo $row['timeg'];?></td>

                                                  </tr>
                                                  <?php
                                                  }
                                                  ?>
                                                  </tbody>
                                                  <!--/Table body-->
                                              </table>
                                              <!--/Table-->

                                          </div>
                                          <!--/.Panel content-->

                                      </div>
                                      <!--/First column-->
                                  </div>
                                  <!--/Second row-->

                              </div>
                              <!--/Admin panel-->

                          </div>
                          <!--/.Card-->
                      </div>

                  </div>


                </section>
            </div>
        </main>
        <!--/Main layout-->

        <!-- <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large red">
                <i class="fa fa-pencil"></i>
            </a>

            <ul>
                <li><a class="btn-floating red"><i class="fa fa-star"></i></a></li>
                <li><a class="btn-floating yellow darken-1"><i class="fa fa-user"></i></a></li>
                <li><a class="btn-floating green"><i class="fa fa-envelope"></i></a></li>
                <li><a class="btn-floating blue"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
        </div> -->

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
