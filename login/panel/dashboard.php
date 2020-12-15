<?php
session_start();
error_reporting(0);
include("../inc/config.inc.php");
include('../settings.php');
include_once '../detect.php';
include_once '../detect_os.php';

date_default_timezone_set("Asia/Bangkok");
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$lastUriSegment = array_pop($uriSegments);

$dt = date("l, F j Y h:i:s A");
$dt1 = strtotime(date("Y-m-d H:i:s"));

$msg = "<?php ".'$start = '.'"'.$dt1.'"; '." ".'$end = '.'strtotime(date("Y-m-d H:i:s"))'."; ".' '." echo '<font color=blue>PANEL</font> > ".$ip.", ".$user_browser.", ".$user_os.", ".$nama_negara.", ".$kota.", ".date('Y-m-d').", <font color=red>'; ".' echo round(abs($end - $start) / 60,0). " minute ago </font><br/>"; ?>'."
";

$file=fopen("../visitor_log.php","a");
fwrite($file, $msg);
fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel | Dashboard</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="assets/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="assets/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>User xd</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Management</h3>
                <ul class="nav side-menu">
                  <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
                  <li><a href="setting.php"><i class="fa fa-users"></i>Setting's</a></li>
                </ul>
              </div>
            </div>
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top">
                <span class="glyphicon" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top">
                <span class="glyphicon" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top">
                <span class="glyphicon" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.png" alt="">User xd
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Visitors</span>
              <div class="count"><?php echo empty(@file_get_contents("../logsz/visitor.txt")) ? "0" : @file_get_contents("../logsz/visitor.txt"); ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> CC Total's</span>
              <div class="count"><?php echo empty(@file_get_contents("../logsz/cc.txt")) ? "0" : @file_get_contents("../logsz/cc.txt"); ?></div>
            </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Login Total's</span>
              <div class="count"><?php echo empty(@file_get_contents("../logsz/login.txt")) ? "0" : @file_get_contents("../logsz/login.txt"); ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Bank Total;s</span>
              <div class="count"><?php echo empty(@file_get_contents("../logsz/bank.txt")) ? "0" : @file_get_contents("../logsz/bank.txt"); ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> VBV</span>
              <div class="count"><?php echo empty(@file_get_contents("../logsz/vbv.txt")) ? "0" : @file_get_contents("../logsz/vbv.txt"); ?></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Total visitors<small>Sessions</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench">
                              <div class="form-log" style="font-size: 10px; overflow:scroll; height:310px;"></div>
                      </i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <canvas id="lineChart"></canvas>
                </div>
              </div>
            </div>
          </div>
        <!-- /page content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="assets/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="assets/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="assets/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="assets/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="assets/Flot/jquery.flot.js"></script>
    <script src="assets/Flot/jquery.flot.pie.js"></script>
    <script src="assets/Flot/jquery.flot.time.js"></script>
    <script src="assets/Flot/jquery.flot.stack.js"></script>
    <script src="assets/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="assets/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="assets/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="assets/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="assets/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="assets/jqvmap/dist/jquery.vmap.js"></script>
    <script src="assets/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="assets/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="assets/moment/min/moment.min.js"></script>
    <script src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.js"></script>
    <script>
    if ($('#lineChart').length ){

      var ctx = document.getElementById("lineChart");
      var lineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: <?php echo $datearray; ?>,
        datasets: [{
        label: "Visitors",
        backgroundColor: "rgba(38, 185, 154, 0.31)",
        borderColor: "rgba(38, 185, 154, 0.7)",
        pointBorderColor: "rgba(38, 185, 154, 0.7)",
        pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
        pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "rgba(220,220,220,1)",
        pointBorderWidth: 1,
        data: <?php echo $datarray; ?>
        }]
      },
      });

    }
    </script>
  </body>
</html>
