<?php
/**
 * Created by PhpStorm.
 * User: 2DAWT
 * Date: 27/02/2015
 * Time: 15:34
 */

class Problema1 extends CI_Controller{


    public function index()
    {
        //Las reglas esta en el archivo form_validation en la carpeta config

        $this->datos_cuerpo['options']=array(
            'Seleccione uno'=>'seleccione',
            'Coche'=>'coche',
            'Furgoneta'=>'furgoneta',
            'Camion'=>'caminon'
        );
        if ($this->form_validation->run('problema1') == FALSE)
        {
            $this->datos_cuerpo['mensaje']=validation_errors();
        }
        else
        {
            $this->datos['tmpl_menu']='Los datos se han introducido correctamente';
        }

        $this->datos['tmpl_cuerpo']= $this->load->view('formulario',$this->datos_cuerpo,true);
        $this->load->view('problema1',$this->datos);
    }




    function  validarPasajero($input)
    {
        if ($this->input->post('tipo')==1)
        {
            if (preg_match('/^[0-4]$/',$input))
            {
                return TRUE;
            }
            else
            {
                $this->form_validation->set_message('validarPasajero','Los coches solo pueden tener entre 0 y 4 pasajeros');
                return FALSE;
            }
        }
        if ($this->input->post('tipo')==2)
        {
            if (preg_match('/^[0-8]$/',$input))
            {
                return TRUE;
            }
            else
            {
                $this->form_validation->set_message('validarPasajero','Las furgonetas solo pueden tener entre 0 y 8 pasajeros');
                return FALSE;
            }
        }
        if ($this->input->post('tipo')==3)
        {
            if (preg_match('/^[0]$/',$input))
            {
                return TRUE;
            }
            else
            {
                $this->form_validation->set_message('validarPasajero','Los camiones no pueden tener pasajeros');
                return FALSE;
            }
        }

    }
    function  validarTipo($input)
    {
        if (preg_match('/^[1-3]$/',$input))
        {
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('validarTipo','Debe seleccionar una opcion para el campo %s.');
            return FALSE;
        }
    }

} 