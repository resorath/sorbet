<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vmr_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_page_render($year, $make, $model)
    {
    	$this->load->library('translate');

		$pagecode = $this->translate->vmr_pagecode($year, $make, $model);

    	$url = "http://www.vmrcanada.com/value_menus/canprices/" . $pagecode . ".html";
    	//echo $url;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36');
		$result=curl_exec($ch);

		if(curl_errno($ch)){
		    echo 'Curl error: ' . curl_error($ch);
		}

		curl_close($ch);

		return $result;

    }


 }