<?php
$this->load->helper('url');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    
		<title>User Login</title>
		
		<link rel="stylesheet" href="<?=base_url('/assets/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?=base_url('/assets/css/AdminLTE.min.css'); ?>">
		<link rel="stylesheet" href="<?=base_url('/assets/css/skin-green.min.css'); ?>">
		
		<script src="<?=base_url('/assets/js/jquery.min.js');?>"></script>
		<script src="<?=base_url('/assets/js/bootstrap.min.js');?>"></script>
		<?php
			if(isset($scripts) && is_array($scripts)):
				foreach($scripts as $script):
		?>
		<?php
				endforeach;
			endif;
		?>
	</head>
	<body class="<?php if(isset($bodyClasses) && is_array($bodyClasses)) { echo implode(' ',$bodyClasses); }?>">