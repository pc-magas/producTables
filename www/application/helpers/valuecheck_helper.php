<?php

require_once APPPATH.'/third_party/EmptyParamException.php';
require_once APPPATH.'/third_party/WrongTypeParamException.php';

if(!function_exists('isNonEmptyStringParam'))
{
	/**
	 * @param mixed $paramValue
	 * 
	 * @throws EmptyParamException When parameter has no value
	 * @throws WrongTypeParamException When the parameter is not a valid string
	 */
	function isNonEmptyStringParam($paramValue,$paramName)
	{
		if(!is_string($paramValue)) {
			throw new WrongTypeParamException($paramName, 'string');
		} else if(empty($paramValue)) {
			throw new EmptyParamException($paramName);
		}
	}
}

if(!function_exists('isValidDateParam'))
{
	/**
	 * @param mixed $paramValue
	 * @param string $paramName
	 *
	 * @throws EmptyParamException When parameter has no value
	 * @throws WrongTypeParamException When the parameter is not a valid string or is not a valid date
	 */
	function isValidDateParam($paramValue,$paramName)
	{
		isNonEmptyStringParam($paramValue,$paramName);
		
		$date = date_parse($paramValue);
		if (!($date["error_count"] == 0 && checkdate($date["month"], $date["day"], $date["year"]))) {
			throw new WrongTypeParamException($paramName,'date');
		}
	}
}

if(!function_exists('checkNumericParam'))
{
	/*
	 * @return bool TRUE when id NOT a numeric param else FALSE
	 */
	function checkNumericParam($paramValue)
	{	
		return (is_string($paramValue) && !ctype_digit($paramValue)) && !is_int($paramValue);
	}
}

if(!function_exists('checkNonEmptyNumericParam'))
{
	/**
	 * @param mixed $paramValue
	 * @param string $paramName
	 * 
	 * @throws WrongTypeParamException
	 * @throws EmptyParamException
	 */
	function checkNonEmptyNumericParam($paramValue,$paramName)
	{
		if( checkNumericParam($paramValue) )
		{	
			throw new WrongTypeParamException($paramName, 'integer');
		} else if(empty($paramValue)) {
			throw new EmptyParamException($paramName);
		}
	}
}

if(!function_exists('checkDbBoolParam'))
{
	/**
	 * @param mixed $paramValue
	 * @param string $paramName
	 * @throws WrongTypeParamException
	 */
	function checkDbBoolParam($paramValue,$paramName)
	{
		if(checkNumericParam($paramValue) && !in_array(intval($paramValue),[0,1]))
		{
			throw new WrongTypeParamException($paramName, 'dbBoollean');
		}
	}
}