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
	 * @throws LoginException
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
			throw new LoginException('User does not exist');
		}

		$data=$query-> result_array()[0];

		if(!password_verify($password,$data['password'])){
			throw new LoginException('User has provided wrong credentials');
		} else {
			$this->session->set_userdata(['id'=>$data['id'],'username'=>$username]);
		}
	}

	/**
	 * @return void
	 */
	public function logout()
	{
		$this->session->unset_userdata(['id','username']);
	}

	/**
	 * @return bool
	 */
	public function isLogedIn()
	{
		$check=$this->session->has_userdata('username') && $this->session->has_userdata('id');
		return $check;
	}

	/**
	 * Get the username of the current loged in user
	 * @throws LoginException
	 */
	public function getLogedinUsername()
	{
		if($this->isLogedIn()){
			return $this->session->get_userdata('username');
		} else {
			throw new LoginException('User is not logedin');
		}
	}
}
