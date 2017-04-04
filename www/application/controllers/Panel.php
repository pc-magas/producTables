<?php

class Panel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('ModUser','user');
		try {
			//I load this particular model here because it will be the only place that will be used.
			$user=$this->user->getLogedinUsername();
			$this->load->view('panel',['username'=>$user]);
		} catch(LoginException $l){
			//This is the only place in this controller that url helper will be used
			$this->load->helper('url');
			redirect('user');
		}
	}

	public function getProducts()
	{

	}
}
