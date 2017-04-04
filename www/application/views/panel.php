<?php

	$this->load->helper('url');
	$headerViewParamsArray=[
								'bodyClasses'=>['hold-transition','skin-green','layout-top-nav'],
								'title'=>'Admin Panel',
								'stylesheets'=>[base_url('/assets/css/datatables.min.css')],
								'scripts'=>[
										base_url('/assets/js/fastclick.js'),
										base_url('/assets/js/jquery.dataTables.min.js'),
										base_url('/assets/js/datatables.bootstrap.min.js'),
										base_url('/assets/js/app.min.js'),
										base_url('/index.php/panel/javascript'),	
								]
							];

	$this->load->view('header.php',$headerViewParamsArray);

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
			        			<a id="userDropDown" href="#" class="dropdown-toggle" data-toggle="dropdown">
                					<img src="https://images.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.3iumuUC5lngNt-nt7xylQQEsEs%26pid%3D15.1&f=1" class="user-image" alt="User Image">
			        				<span class="hidden-xs">Welcome <?=$username?></span>
			        			</a>

				        		<ul class="dropdown-menu" aria-labelledby="userDropDown">
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
				<div class="box box-default">
					<div class="box-body">
						<table id="data" class="table table-bordered table-hover dataTable">
							<thead>
								<th>Title</th>
								<th>Price</th>
								<th>% Discount</th>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
	    </div>
    </div>
<?php
	$this->load->view('footer.php')
?>
