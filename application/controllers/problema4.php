<?php
/**
 * Created by PhpStorm.
 * User: 2DAWT
 * Date: 27/02/2015
 * Time: 15:34
 */

class Problema4 extends CI_Controller{


    public function index()
    {
        $client = new SoapClient("http://footballpool.dataaccess.eu/data/info.wso?wsdl");





        $client = new SoapClient("http://footballpool.dataaccess.eu/data/info.wso?wsdl");


        $result = $client->AllPlayersWithYellowCards(1,0);

        // Note that $array contains the result of the traversed object structure
       // $entrenadores = $result->AllPlayersWithYellowCardsResult;
        // Note that $array contains the result of the traversed object structure
        $datos = array(
            'titulo' => 'Mi Titulo',
            'encabezado' => 'Mi Encabezado',
            'mensaje' => 'Mi Mensaje'
        );
        $datos=array(
            'jugadores'=>''
        );

        print_r($result);
        //$this->load->view('problema4',$datos);

    }

} 