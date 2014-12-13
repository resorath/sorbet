<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Translate 
{
	public function vmr_pagecode($year, $make, $model)
	{
		$code = substr($year, 2);

		$code .= strtolower(substr($make, 0, 2));

		$code .= strtolower(substr($model, 0, 2));

		$code .= strtolower(substr($model, -2));

		return $code;


	}


}