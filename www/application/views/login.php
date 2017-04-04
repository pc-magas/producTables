<?php 
	$this->load->view('header.php',['bodyClasses'=>['hold-transition','login-page'],'title'=>'User Login']);
	$this->load->helper('form');
?>
<div class="login-box">
	<div class="login-logo">
    	<p><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;ProducTables&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span></p>
  	</div>
	<div class="login-box-body">
		<?=form_open('user/login',['method'=>'post']);?>
			<p class="login-box-msg">Sign in to start your session</p>
			
			<div class="form-group has-feedback">
				<?=form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username']); ?>
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<?=form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']); ?>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        		</div>
			</div>
		<?=form_close();?>
	</div>
</div>

<?php
	$this->load->view('footer.php');
?>