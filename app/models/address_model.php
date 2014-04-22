<?php
/**
 * @author: Tanveer Noman <tanveer.noman@gmail.com>
 * @description: 
 * @license http://opensource.org/licenses/mit-license.html MIT
 * @copyright (c) 2014, Tanveer Noman
 * @version 1.0
**/

class Address_model extends Model {
	
	public function getAllAddresses()
	{
		$result = $this->query('SELECT a.id, a.first_name, a.last_name, a.street, a.zip,  c.name as city
                                FROM addresses a, cities c
                                WHERE a.citiesid = c.id');
		return $result;
	}

        public function getAddress($id = null){
            if($id != null){
                $result = $this->query('SELECT * FROM `addresses` WHERE id ='.$this->escapeString($id));
                return $result;
            }
        }

        public function add($array = array()){
            if(!empty($array)){
                $arr = $this->escapeArray($array);
                $query = "INSERT INTO `addresses` (`first_name`, `last_name`, `street`, `zip`,`citiesid`)
                VALUES('".$arr['first_name']."','".$arr['last_name']."','".$arr['street']."','".$arr['zip']."',".$arr['city'].")";
                return $this->execute($query);
            }
        }

        public function edit($array = array()){
            if(!empty($array)){
                $arr = $this->escapeArray($array); 
                $query = "UPDATE `addresses` SET `first_name` = '".$arr['first_name']."',
                    `last_name` = '".$arr['last_name']."',
                    `street` = '".$arr['street']."',
                    `zip` = '".$arr['zip']."',
                    `citiesid` = ". $arr['city']." WHERE `id` = ".$arr['id'];
                return $this->execute($query);
            }
        }

        public function delete($id = null){
            if($id != null){
                $query = 'DELETE FROM `addresses` WHERE `id` = '.$this->escapeString($id);
                return $this->execute($query);
            }
        }
}

?>
