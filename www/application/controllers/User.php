<?php

if ( ! defined('BASEPATH')) exit("No direct script access allowed");

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModUser','user');
	}
	
	public function index()
	{
		$this->getLoginPage();
	}
	
	public function login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		try {
			$this->user->login($username,$password);
			$this->load->helper('url');
			redirect('panel');
		} catch(Exception $e) {
			redirect('login/index');
		}
	}
	
	private function getLoginPage()
	{
		$this->load->view('login');
	}	
	
}