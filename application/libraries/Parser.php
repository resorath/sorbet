<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Parser 
{
	public function parse_cbb_final($render)
	{
		// find low
		$searchfor = "<div class=\"low_price\">";
		$pattern = preg_quote($searchfor, '/');
		$return_pack = array();
		// finalise the regular expression, matching the whole line
		$pattern = "/^.*$pattern.*\$/m";
		// search, and store all matching occurences in $matches
		if(preg_match_all($pattern, $render, $matches)){
		   $return_pack[] = (strip_tags(trim($matches[0][0])));
		}

		//find high
		$searchfor = "<div class=\"high_price\">";
		$pattern = preg_quote($searchfor, '/');
		// finalise the regular expression, matching the whole line
		$pattern = "/^.*$pattern.*\$/m";
		// search, and store all matching occurences in $matches
		if(preg_match_all($pattern, $render, $matches)){
		   $return_pack[] = (strip_tags(trim($matches[0][0])));
		}

		return $return_pack;

	}

	public function parse_vmr_final($render)
	{
		$searchfor = "<table border=\"1\" cellspacing=\"0\" width=\"440\" style=\"border-collapse: collapse\" bordercolor=\"#EEEEEE\" cellpadding=\"0\">";
		$endat = "</table>";

		$starts = strpos($render, $searchfor);
		$ends = strpos($render, $endat, $starts);

		$table_payload = substr($render, $starts, ($ends - $starts)) . "</table>";

		return $table_payload;

	}


}