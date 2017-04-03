<?php

if ( ! defined('BASEPATH')) exit("No direct script access allowed");

require_once APPPATH.'/third_party/LoginException.php';

class ModUser extends CI_Model
{
	const USER_TABLE='user';
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('valuecheck_helper');
	}
	
	/**
	 * 
	 * @param string $username
	 * @param string $password
	 * 
	 * @throws Exception
	 * @throws WrongTypeParamException
	 * @throws EmptyParamException
	 */
	public function login($username,$password)
	{
		isNonEmptyStringParam($username,'username');
		isNonEmptyStringParam($password,'password');
		
		$this->db->select('id,password')->where('username',$username)->from(self::USER_TABLE);
		$query=$this->db->get();
		
		if($query->num_rows()==0){
			throw new Exception('User does not exist');
		}
		
		$data=$query-> result_array()[0];
		
		if(!password_verify($password,$data['password'])){
			throw new Exception('User has provided wrong credentials');
		} else {
			$this->session->set_userdata(['id'=>$data['id'],'username'=>$data['username']]);
		}
	}
	
}