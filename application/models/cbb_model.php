<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cbb_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_trim($year, $make, $model)
    {
    	$url = "http://www.canadianblackbook.com/ajax/bbv/year/" . $year . "/make/" . $make . "/model/" . $model . "/trim";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/12.0.0.13');
		$result=curl_exec($ch);

		if(curl_errno($ch)){
		    echo 'Curl error: ' . curl_error($ch);
		}

		curl_close($ch);

		if(json_last_error() != JSON_ERROR_NONE)
			return null;

		return json_decode($result, true);
    }

    function get_styles($year, $make, $model, $trim)
    {
    	$url = "http://www.canadianblackbook.com/ajax/bbv/year/" . $year . "/make/" . $make . "/model/" . $model . "/trim/" . $trim . "/style";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/12.0.0.13');
		$result=curl_exec($ch);

		if(curl_errno($ch)){
		    echo 'Curl error: ' . curl_error($ch);
		}

		curl_close($ch);

		return json_decode($result, true);

    }

    function get_page_render($year, $make, $model, $trim, $style, $currentkm)
    {
    	$url = "http://www.canadianblackbook.com/black-book-values/index/display/neworused/used/year/".$year."/make/".$make."/postalcode/_/model/".$model."/mode/tradein/trim/".$trim."/style/".$style."/selectedoptions/_/currentkilometers/".$currentkm."/iiyear/2015/iimake/Undecided/iimodel/Undecided/interval/30";
    	//echo $url;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/12.0.0.13');
		$result=curl_exec($ch);

		if(curl_errno($ch)){
		    echo 'Curl error: ' . curl_error($ch);
		}

		curl_close($ch);

		return $result;

    }
    

}