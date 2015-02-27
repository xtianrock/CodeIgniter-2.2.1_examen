<?php
/**
 * Created by PhpStorm.
 * User: 2DAWT
 * Date: 27/02/2015
 * Time: 15:34
 */

class Problema5 extends CI_Controller{


    public function index()
    {
        $cursos=simplexml_load_file("cursos.xml");
        foreach ($cursos as $curso)
        {
            if($curso->category==7)
            {
               echo $curso->fullname.'</br>';
            }
        }

    }

} 