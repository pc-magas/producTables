<?php 
	$this->load->view('header.php',['bodyClasses'=>['hold-transition','login-page']]);
	$this->load->helper('form');
?>
<div class="login-box">
	<div class="login-box-body">
		<?=form_open('login/login',['method'=>'post']);?>
			<div class="form-group has-feedback">
				<?=form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username']); ?>
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<?=form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']); ?>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>      
		<?=form_close();?>
	</div>
</div>

<?php
	$this->load->view('footer.php');
?>