<?php
/**
 * @author: Tanveer Noman <tanveer.noman@gmail.com>
 * @description: 
 * @license http://opensource.org/licenses/mit-license.html MIT
 * @copyright (c) 2014, Tanveer Noman
 * @version 1.0
**/

class Address extends Controller {

    function index() {
        $template = $this->loadView('add_address');
        $cities = $this->loadModel('City_model');
        $data = $cities->getAllCities();
        $template->set('cities', $data);
        $template->render();
    }

    function addAction() {
        if (!empty($_POST)) {
            $newAdd = $this->loadModel('Address_model');
            $result = $newAdd->add($_POST);
            if ($result) {
                $this->redirect('home');
            }
        }
    }

    function edit($id = null) {
        if ($id != null) {
            $template = $this->loadView('edit_address');
            $cities = $this->loadModel('City_model');
            $data = $cities->getAllCities();
            $template->set('cities', $data);
            $getAdd = $this->loadModel('Address_model');
            $data = $getAdd->getAddress($id);
            if ($data) {
                $template->set('address', $data);
                $template->render();
            }
        } else {
            $this->redirect('error');
        }
    }

    function editAction() {
        if (!empty($_POST)) {
            $editAdd = $this->loadModel('Address_model');
            $editAdd->edit($_POST) ? $this->redirect('home') : $this->redirect('error');
        } else {
            $this->redirect('error');
        }
    }

    function delete($id = null) {
        if ($id != null) {
            $delAdd = $this->loadModel('Address_model');
            $delAdd->delete($id) ? $this->redirect('home') : $this->redirect('error');
        } else {
            $this->redirect('error');
        }
    }

    function export() {

        header('Content-Disposition: attachment; filename=export.xml');
        header("Content-Type: application/force-download");
        header('Pragma: private');
        header('Cache-control: private, must-revalidate');

        $export = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n";
        $export .= "<addresses>";

        $addressModel = $this->loadModel('Address_model');
        $addresses = $addressModel->getAllAddresses();

        foreach ($addresses as $address) {
            $export .= "<address>";
            $export .= "<id>" . $address->id . "</id>";
            $export .= "<first_name>" . $address->first_name . "</first_name>";
            $export .= "<last_name>" . $address->last_name . "</last_name>";
            $export .= "<street>" . $address->street . "</street>";
            $export .= "<zip>" . $address->zip . "</zip>";
            $export .= "<city>" . $address->city . "</city>";
            $export .= "</address>";
        }
        $export.="</addresses>";

        $xml = new SimpleXMLElement($export);
        echo $xml->asXML();
    }

}
?>