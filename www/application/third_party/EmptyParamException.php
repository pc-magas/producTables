<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EmptyParamException extends Exception {
	
	public function __construct($field)
	{
		parent::__construct("The field $field does not have value");
	}
	
	
}