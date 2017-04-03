<?php

class Login extends CI_Controller
{
	public function __construct()
	{
		parent:: construct();
	}
	
	public function index()
	{
		$this->getLoginPage();
	}
	
	public function login()
	{
		
	}
	
	private function getLoginPage()
	{
		echo $this->load->view('login');
	}
	
	private function loginAction()
	{
		
	}
	
}