<?php
/**
 * @author: Tanveer Noman <tanveer.noman@gmail.com>
 * @description: 
 * @license http://opensource.org/licenses/mit-license.html MIT
 * @copyright (c) 2014, Tanveer Noman
 * @version 1.0
**/

//Starting session
session_start(); 

// Defines
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('APP_DIR', ROOT_DIR .'app/');

// Includes
require(ROOT_DIR .'system/config.php');
require(ROOT_DIR .'system/model.php');
require(ROOT_DIR .'system/view.php');
require(ROOT_DIR .'system/controller.php');
require(ROOT_DIR .'system/startup.php');

// Define global configurations
global $config;
define('BASE_URL', $config['base_url']);

startup();

?>
