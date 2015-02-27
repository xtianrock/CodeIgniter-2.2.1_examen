<?php
/**
 * Created by PhpStorm.
 * User: 2DAWT
 * Date: 27/02/2015
 * Time: 15:34
 */

class Soap extends CI_Controller{


    public function index()
    {
        $client = new SoapClient("http://footballpool.dataaccess.eu/data/info.wso?wsdl");


        $result = $client->Coaches();

        // Note that $array contains the result of the traversed object structure
        $datos=array(
            $entrenadores = $result->CoachesResult->tCoaches
        );

        $this->load->view('soap'$datos);
    }

} 