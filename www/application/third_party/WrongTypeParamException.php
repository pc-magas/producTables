<?php

class WrongTypeParamException extends Exception
{
	public function __construct($param, $type)
	{
		parent::__construct("The param $param is not a valid $type");
	}
}