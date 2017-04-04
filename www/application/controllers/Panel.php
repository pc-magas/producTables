<?php

class Panel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModUser','user');
		$this->load->model('ModProducts','products');
	}

	public function index()
	{
		try {
			$user=$this->user->getLogedinUsername();
			$this->load->view('panel',['username'=>$user]);
		} catch(LoginException $l) {
			//This is the only place in this controller that url helper will be used
			$this->load->helper('url');
			redirect('user');
		}
	}

	public function javascript()
	{
		$this->load->view('javascript_view');
	}

	public function getProducts()
	{
			if(!$this->user->isLogedIn()) {
				echo $this->load->view('ajax_403_view');
			} else {
				$products=$this->products->get();
				$this->load->view('json_view',['data'=>['data'=>$products]]);
			}
	}
}
