﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ระบบ EMR Online โรงพยาบาลปัตตานี</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>
<body>
<?php include('connect.php');
$today_date = date("Y-m-d");
$yy = explode("-",$today_date);
$year = $yy[0];
$i = 0;
?>

<?php
$sql = "SELECT vn, CONCAT(vstdate,' ',vsttime) AS V_time from ovst WHERE vstdate = '".$today_date ."' limit 10 "; 

$query = mysqli_query($conn,$sql);
?>

    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong>EMR Online</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
		<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
     
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">

            <div id="page-inner">

                <!-- /. ROW  -->
                         <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            แฟ้มเวชระเบียน
                        </div>
                    <div class="panel-body"> 

                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>hn</label>
                                            <input class="form-control">
                                        </div>
                                    </form>
                                   
                                     <form role="form">
                                        <div class="form-group">
                                            <label>ที่อยู่</label>
                                            <input class="form-control">
                                        </div>
                                    </form>
                                   
                                </div>

                                    <div class="col-md-4 col-sm-4">
                                    <form role="form">
                                             <div class="form-group">
                                                    <label>ชื่อผู้ป่วย</label>
                                                    <input class="form-control">
                                            </div>
                                    </from>   
                                    </div>

                                    <div class="col-md-4 col-sm-4">
                                    <form role="form">
                                             <div class="form-group">
                                                    <label>อายุ</label>
                                                    <input class="form-control">
                                            </div>
                                    </from>   
                                    </div>

        


                            <div class="col-md-12 col-sm-13">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Screen & ตรวจรักษา
                                    </div>

                                        <div class="row"> <br>
                                <div class="col-md-3 col-sm-4">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>วันที่มา</label>
                                            <input class="form-control" >
                                        </div>
                                    </form>
                                   
                                    <form role="form">
                                        <div class="form-group">
                                            <label>สิทธิการรักษา</label>
                                            <input class="form-control">
                                        </div>
                                    </form>
                                   
                                    <form role="form">
                                        <div class="form-group">
                                            <label>แพทย์ผู้ตรวจ</label>
                                            <input class="form-control">
                                        </div>
                                    </form>



                                </div>

                                    <div class="col-md-3 col-sm-4">
                                    <form role="form">
                                             <div class="form-group">
                                                    <label>เวลา</label>
                                                    <input class="form-control">
                                            </div>
                                    </from>  


                                    <form role="form">
                                             <div class="form-group">
                                                    <label>เลขที่</label>
                                                    <input class="form-control">
                                            </div>
                                    </from>   
                                
                                    </div>

                                    <div class="col-md-3 col-sm-4">
                                    <form role="form">
                                             <div class="form-group">
                                                    <label>ผู้ส่งตรวจ</label>
                                                    <input class="form-control">
                                            </div>
                                    </from>   
                                    </div>

                        
                                    





                                </div>
                            </div>


			     <!-- /. tab  -->
                  <div class="col-md-14 col-sm-12 col-xs-12">
		      <div class="row">
                <div class="col-md-14 col-sm-14">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="panel panel-default">
                      
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">รายการยา</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab">LAB</a>
                            
                            </ul>
                    

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">

                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Profile Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
    </div>

                


				<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p>
				
        
				</footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      <script>
    
      </script>

</body>

</html>