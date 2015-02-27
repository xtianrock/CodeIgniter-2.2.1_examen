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


        // Note that $array contains the result of the traversed object structure
        $datos = array(
            'titulo' => 'Mi Titulo',
            'encabezado' => 'Mi Encabezado',
            'mensaje' => 'Mi Mensaje'
        );
        $datos=array(
            'entrenadores'=>$client->Coaches()->CoachesResult->tCoaches
        );

        //print_r($entrenadores);
        $this->load->view('soap',$datos);
    }

} 