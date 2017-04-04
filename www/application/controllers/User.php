<?php

if ( ! defined('BASEPATH')) exit("No direct script access allowed");

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModUser','user');
		$this->load->helper('url');
	}

	public function index()
	{
		if($this->user->isLogedIn()){
			redirect('panel');
		} else {
			$this->load->view('login');
		}
	}

	public function login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');


		try {
			$this->user->login($username,$password);
			redirect('panel');
		} catch(Exception $e) {
			redirect('user/index');
		}
	}

	public function logout()
	{
		$this->user->logout();
		redirect('user');
	}
}
