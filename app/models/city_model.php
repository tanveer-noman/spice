<?php
/**
 * @author: Tanveer Noman <tanveer.noman@gmail.com>
 * @description: 
 * @license http://opensource.org/licenses/mit-license.html MIT
 * @copyright (c) 2014, Tanveer Noman
 * @version 1.0
**/

class City_model extends Model {
	
	public function getAllCities()
	{
		$result = $this->query('SELECT * FROM `cities`');
		return $result;
	}
}

?>
