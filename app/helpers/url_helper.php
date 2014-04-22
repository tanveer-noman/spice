<?php
/**
 * @author: Tanveer Noman <tanveer.noman@gmail.com>
 * @description: 
 * @license http://opensource.org/licenses/mit-license.html MIT
 * @copyright (c) 2014, Tanveer Noman
 * @version 1.0
**/

class Url_helper {

	function base_url()
	{
		global $config;
		return $config['base_url'];
	}
	
	function segment($seg)
	{
		if(!is_int($seg)) return false;
		
		$parts = explode('/', $_SERVER['REQUEST_URI']);
	    return isset($parts[$seg]) ? $parts[$seg] : false;
	}
	
}

?>