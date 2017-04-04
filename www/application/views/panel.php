<?php
	$this->load->view('header.php',['bodyClasses'=>['hold-transition','skin-green','layout-top-nav'],'title'=>'Admin Panel']);
	$this->load->helper('url');
?>
	<!-- Top Navbar -->
	<header class="main-header">
		    <nav class="navbar navbar-static-top">
		    	<div class="container">

		    		<div class="navbar-header">
			          <a href="<?=base_url('./index.php/panel')?>" class="navbar-brand"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;ProducTables&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span></a>
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
			            <i class="fa fa-bars"></i>
			          </button>
			        </div>

			        <div class="navbar-custom-menu">
			        	<ul class="nav navbar-nav">
			        		<li class="dropdown user user-menu">
			        			<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="true">
			        				<span class="user-image"><span class="glyphicon glyphicon-user"></span></span>
			        				<span>Welcome <?=$username?></span>
			        			</a>

				        		<ul class="dropdown-menu">
				        			<li class="user-footer"><a class="btn btn-link" href="<?=base_url('index.php/user/logout');?>" style="color:#d9534f">Logout</a></li>
				        		</ul>
			        		</li>
			        	</ul>
			        </div>

		    	</div>
		    </nav>

	</header>
	<!-- /Top Navbar -->

	<div class="content-wrapper">
	    <div class="container">
	    	<h1 class="text-center">Products Table</h1>
	    </div>
    </div>
<?php
	$this->load->view('footer.php')
?>
