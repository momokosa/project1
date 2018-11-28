<html lang="en">
<head>
	<title>B&W List Management - <?php echo $title; ?></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta equiv="Content-Type" content="text/html; charset=<?php echo config_item('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>css/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url();?>css/main/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="<?php echo base_url();?>css/main/metisMenu/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="<?php echo base_url();?>css/main/dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Morris Charts CSS -->
	<link href="<?php echo base_url();?>css/main/morrisjs/morris.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo base_url();?>css/main/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
<!--===============================================================================================-->
	<?php
		if($this->session->flashdata('message') != ''){
			 echo "<script>alert('".$this->session->flashdata('message')."');</script>";
		}else
	?>
<!--===============================================================================================-->
</head>
<body>

	    <div id="wrapper">
	        <!-- Navigation -->
	        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="#">B&W List Management - <?php echo $user_role." : ".$user_full_name;?></a>
	            </div>
	            <!-- /.navbar-header -->

	            <ul class="nav navbar-top-links navbar-right">
	                <li class="dropdown">
	                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
	                    </a>
	                    <ul class="dropdown-menu dropdown-alerts">
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <i class="fa fa-comment fa-fw"></i> New Comment
	                                    <span class="pull-right text-muted small">4 minutes ago</span>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
	                                    <span class="pull-right text-muted small">12 minutes ago</span>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
	                                    <span class="pull-right text-muted small">4 minutes ago</span>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <i class="fa fa-tasks fa-fw"></i> New Task
	                                    <span class="pull-right text-muted small">4 minutes ago</span>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
	                                    <span class="pull-right text-muted small">4 minutes ago</span>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a class="text-center" href="#">
	                                <strong>See All Alerts</strong>
	                                <i class="fa fa-angle-right"></i>
	                            </a>
	                        </li>
	                    </ul>
	                    <!-- /.dropdown-alerts -->
	                </li>
	                <!-- /.dropdown -->
	                <li class="dropdown">
	                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
	                    </a>
	                    <ul class="dropdown-menu dropdown-user">
	                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
	                        </li>
	                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
	                        </li>
	                        <li class="divider"></li>
	                        <li><a href="<?php echo base_url('SignOut');?>"><i class="fa fa-sign-out fa-fw"></i> SignOut</a>
	                        </li>
	                    </ul>
	                    <!-- /.dropdown-user -->
	                </li>
	                <!-- /.dropdown -->
	            </ul>
	            <!-- /.navbar-top-links -->

	            <div class="navbar-default sidebar" role="navigation">
	                <div class="sidebar-nav navbar-collapse">
	                    <ul class="nav" id="side-menu">
	                        <li class="sidebar-search">
	                            <div class="input-group custom-search-form">
	                                <input type="text" class="form-control" placeholder="Search...">
	                                <span class="input-group-btn">
	                                <button class="btn btn-default" type="button">
	                                    <i class="fa fa-search"></i>
	                                </button>
	                            </span>
	                            </div>
	                            <!-- /input-group -->
	                        </li>
	                        <li>
	                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
	                        </li>
	                        <li>
	                            <a href="#"><i class="fa fa-users fa-fw"></i> Manage Users<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="#">Show All User</a>
	                                </li>
	                                <li>
	                                    <a href="#">Add New User</a>
	                                </li>
									<li>
	                                    <a href="#">Edit User</a>
	                                </li>
									<li>
	                                    <a href="#">Delete User</a>
	                                </li>
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>
	                        <li>
								<a href="#"><i class="fa fa-users fa-fw"></i> Manage Customer<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
	                                <li>
	                                    <a href="#">Show All Customer</a>
	                                </li>
	                                <li>
	                                    <a href="#">Add New Customer</a>
	                                </li>
									<li>
	                                    <a href="#">Edit Customer</a>
	                                </li>
									<li>
	                                    <a href="#">Edit Status Blacklist</a>
	                                </li>
									<li>
	                                    <a href="#">Delete Customer</a>
	                                </li>
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>
							<li>
								<a href="#"><i class="fa fa-folder-open fa-fw"></i> Report<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
	                                <li>
	                                    <a href="#">Export Report</a>
	                                </li>
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>
	                        <li>
	                            <a href="<?php echo base_url('SignOut');?>"><i class="fa fa-sign-out fa-fw fa-fw"></i> Sign Out</span></a>
	                        </li>
	                    </ul>
	                </div>
	                <!-- /.sidebar-collapse -->
	            </div>
	            <!-- /.navbar-static-side -->
	        </nav>

	        <div id="page-wrapper">
	            <div class="row">
	                <div class="col-lg-12">
	                    <h1 class="page-header">Dashboard</h1>
	                </div>
	                <!-- /.col-lg-12 -->
	            </div>
	            <!-- /.row -->
	            <div class="row">
	                <div class="col-lg-3 col-md-6">
	                    <div class="panel panel-primary">
	                        <div class="panel-heading">
	                            <div class="row">
	                                <div class="col-xs-3">
	                                    <i class="fa fa-comments fa-5x"></i>
	                                </div>
	                                <div class="col-xs-9 text-right">
	                                    <div class="huge">1,000</div>
	                                    <div>Customer Total</div>
	                                </div>
	                            </div>
	                        </div>
	                        <a href="#">
	                            <div class="panel-footer">
	                                <span class="pull-left">View Details</span>
	                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                                <div class="clearfix"></div>
	                            </div>
	                        </a>
	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-6">
	                    <div class="panel panel-green">
	                        <div class="panel-heading">
	                            <div class="row">
	                                <div class="col-xs-3">
	                                    <i class="fa fa-tasks fa-5x"></i>
	                                </div>
	                                <div class="col-xs-9 text-right">
	                                    <div class="huge">900</div>
	                                    <div>Whitelist</div>
	                                </div>
	                            </div>
	                        </div>
	                        <a href="#">
	                            <div class="panel-footer">
	                                <span class="pull-left">View Details</span>
	                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                                <div class="clearfix"></div>
	                            </div>
	                        </a>
	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-6">
	                    <div class="panel panel-red">
	                        <div class="panel-heading">
	                            <div class="row">
	                                <div class="col-xs-3">
	                                    <i class="fa fa-support fa-5x"></i>
	                                </div>
	                                <div class="col-xs-9 text-right">
	                                    <div class="huge">100</div>
	                                    <div>Backlist</div>
	                                </div>
	                            </div>
	                        </div>
	                        <a href="#">
	                            <div class="panel-footer">
	                                <span class="pull-left">View Details</span>
	                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                                <div class="clearfix"></div>
	                            </div>
	                        </a>
	                    </div>
	                </div>
	            </div>
	            <!-- /.row -->
	            <div class="row">
	                <div class="col-lg-8">
	                    <div class="panel panel-default">
	                        <div class="panel-heading">
	                            <i class="fa fa-bar-chart-o fa-fw"></i> Customer Area Chart
	                            <div class="pull-right">
	                                <div class="btn-group">
	                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
	                                        Actions
	                                        <span class="caret"></span>
	                                    </button>
	                                    <ul class="dropdown-menu pull-right" role="menu">
	                                        <li><a href="#">Action</a>
	                                        </li>
	                                        <li><a href="#">Another action</a>
	                                        </li>
	                                        <li><a href="#">Something else here</a>
	                                        </li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Separated link</a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /.panel-heading -->
	                        <div class="panel-body">
	                            <div id="morris-area-chart"></div>
	                        </div>
	                        <!-- /.panel-body -->
	                    </div>
	                    <!-- /.panel -->
	                    <div class="panel panel-default">
	                        <div class="panel-heading">
	                            <i class="fa fa-bar-chart-o fa-fw"></i> Customer Bar Chart
	                            <div class="pull-right">
	                                <div class="btn-group">
	                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
	                                        Actions
	                                        <span class="caret"></span>
	                                    </button>
	                                    <ul class="dropdown-menu pull-right" role="menu">
	                                        <li><a href="#">Action</a>
	                                        </li>
	                                        <li><a href="#">Another action</a>
	                                        </li>
	                                        <li><a href="#">Something else here</a>
	                                        </li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Separated link</a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /.panel-heading -->
	                        <div class="panel-body">
	                            <div class="row">
	                                <div class="col-lg-4">
	                                    <div class="table-responsive">
	                                        <table class="table table-bordered table-hover table-striped">
	                                            <thead>
	                                                <tr>
	                                                    <th>#</th>
	                                                    <th>Date</th>
	                                                    <th>Time</th>
	                                                    <th>Amount</th>
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                                <tr>
	                                                    <td>3326</td>
	                                                    <td>10/21/2013</td>
	                                                    <td>3:29 PM</td>
	                                                    <td>$321.33</td>
	                                                </tr>
	                                                <tr>
	                                                    <td>3325</td>
	                                                    <td>10/21/2013</td>
	                                                    <td>3:20 PM</td>
	                                                    <td>$234.34</td>
	                                                </tr>
	                                                <tr>
	                                                    <td>3324</td>
	                                                    <td>10/21/2013</td>
	                                                    <td>3:03 PM</td>
	                                                    <td>$724.17</td>
	                                                </tr>
	                                                <tr>
	                                                    <td>3323</td>
	                                                    <td>10/21/2013</td>
	                                                    <td>3:00 PM</td>
	                                                    <td>$23.71</td>
	                                                </tr>
	                                                <tr>
	                                                    <td>3322</td>
	                                                    <td>10/21/2013</td>
	                                                    <td>2:49 PM</td>
	                                                    <td>$8345.23</td>
	                                                </tr>
	                                                <tr>
	                                                    <td>3321</td>
	                                                    <td>10/21/2013</td>
	                                                    <td>2:23 PM</td>
	                                                    <td>$245.12</td>
	                                                </tr>
	                                                <tr>
	                                                    <td>3320</td>
	                                                    <td>10/21/2013</td>
	                                                    <td>2:15 PM</td>
	                                                    <td>$5663.54</td>
	                                                </tr>
	                                                <tr>
	                                                    <td>3319</td>
	                                                    <td>10/21/2013</td>
	                                                    <td>2:13 PM</td>
	                                                    <td>$943.45</td>
	                                                </tr>
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                    <!-- /.table-responsive -->
	                                </div>
	                                <!-- /.col-lg-4 (nested) -->
	                                <div class="col-lg-8">
	                                    <div id="morris-bar-chart"></div>
	                                </div>
	                                <!-- /.col-lg-8 (nested) -->
	                            </div>
	                            <!-- /.row -->
	                        </div>
	                        <!-- /.panel-body -->
	                    </div>
	                    <!-- /.panel -->
	                </div>
	                <!-- /.col-lg-8 -->
	                <div class="col-lg-4">
	                    <div class="panel panel-default">
	                        <div class="panel-heading">
	                            <i class="fa fa-bar-chart-o fa-fw"></i> Customer Donut Chart
	                        </div>
	                        <div class="panel-body">
	                            <div id="morris-donut-chart"></div>
	                            <a href="#" class="btn btn-default btn-block">View Details</a>
	                        </div>
	                        <!-- /.panel-body -->
	                    </div>
	                    <!-- /.panel -->
	                </div>
	                <!-- /.col-lg-4 -->
	            </div>
	            <!-- /.row -->
	        </div>
	        <!-- /#page-wrapper -->

	    </div>
	    <!-- /#wrapper -->

	    <!-- jQuery -->
	    <script src="<?php echo base_url();?>css/main/jquery/jquery.min.js"></script>

	    <!-- Bootstrap Core JavaScript -->
	    <script src="<?php echo base_url();?>css/main/bootstrap/js/bootstrap.min.js"></script>

	    <!-- Metis Menu Plugin JavaScript -->
	    <script src="<?php echo base_url();?>css/main/metisMenu/metisMenu.min.js"></script>

	    <!-- Morris Charts JavaScript -->
	    <script src="<?php echo base_url();?>css/main/raphael/raphael.min.js"></script>
	    <script src="<?php echo base_url();?>css/main/morrisjs/morris.min.js"></script>
	    <script src="<?php echo base_url();?>css/main/data/morris-data.js"></script>

	    <!-- Custom Theme JavaScript -->
	    <script src="<?php echo base_url();?>css/main/dist/js/sb-admin-2.js"></script>

</body>
</html>