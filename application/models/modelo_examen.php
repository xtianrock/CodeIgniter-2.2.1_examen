<?php
/**
 * Created by PhpStorm.
 * User: xtianrock
 * Date: 27/02/2015
 * Time: 0:17
 */

class Modelo_examen extends CI_Model{

    function __construct()
    {
        parent::__construct();
        $this->load->database('default');
    }


    public function getPaises()
    {
       return $this->db->select('id,nombre,continente')->from('paises')->get()->result();
    }
}