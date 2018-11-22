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
