<?php

/**
 * @author: Tanveer Noman <tanveer.noman@gmail.com>
 * @description: 
 * @license http://opensource.org/licenses/mit-license.html MIT
 * @copyright (c) 2014, Tanveer Noman
 * @version 1.0
 * */
class Home extends Controller {

    function index() {
        $this->hasConfig();
        $template = $this->loadView('home');
        $addressModel = $this->loadModel('Address_model');
        $data = $addressModel->getAllAddresses();
        $template->set('addresses', $data);
        $template->render();
    }

    function hasConfig() {
        global $config;
        if ($config['base_url'] == '' || $config['db_host'] == '' ||
                $config['db_name'] == '' || $config['db_username'] == '' || $config['db_password'] == '') {
            echo '<h1>Configuration Error!</h1>';
            echo '<p>Looks like configuration page didn\'t set properly. Please go to <a href="readme.txt">readme</a></p>';
            exit;
        }
    }

}

?>
