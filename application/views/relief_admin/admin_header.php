
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Nepal Earth Quake Knowledge Management System</title>
		<meta name="description" content="overview & stats" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

		<!-- basic styles -->
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<!-- page specific plugin styles -->

        <?php if ( isset( $css_files ) ): ?>
            <?php foreach($css_files as $file): ?>
            	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
            <?php endforeach; ?>
        <?php endif; ?>
        <?php if ( isset( $js_files ) ): ?>
            <?php foreach($js_files as $file): ?>
            	<script src="<?php echo $file; ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
		<!-- ace styles -->

	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-header">Nepal Earth Quake Knowledge Management System</h2>
				</div>
			</div>
		</div>

		<?php
		 $application_path = dirname(__FILE__);
		include("$application_path/../flash_messages.inc.php"); ?>

