<?php
/**
 * @author: Tanveer Noman <tanveer.noman@gmail.com>
 * @description: 
 * @license http://opensource.org/licenses/mit-license.html MIT
 * @copyright (c) 2014, Tanveer Noman
 * @version 1.0
**/

class Session_helper {

	function set($key, $val)
	{
		$_SESSION["$key"] = $val;
	}
	
	function get($key)
	{
		return $_SESSION["$key"];
	}
	
	function destroy()
	{
		session_destroy();
	}

}

?>