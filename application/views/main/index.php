<html lang="en">
<head>
	<title>B&W List Management - <?php echo $title; ?></title>
	<meta charset="UTF-8">
	<meta equiv="Content-Type" content="text/html; charset=<?php echo config_item('charset');?>">
<!--===============================================================================================-->
	<?php
		if($this->session->flashdata('message') != ''){
			 echo "<script>alert('".$this->session->flashdata('message')."');</script>";
		}else
	?>
<!--===============================================================================================-->
</head>
<body>
	
	<H1><a href="<?php echo base_url('SignOut')?>">Sign Out</a><H1>
</body>
</html>
