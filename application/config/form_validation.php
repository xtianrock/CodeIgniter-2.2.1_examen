<?php
/**
 * Created by PhpStorm.
 * User: xtianrock
 * Date: 11/02/2015
 * Time: 2:36
 */

$config = array(
    'problema1'=>array(
        array(
            'field' => 'matricula',
            'label' => 'Matricula',
            'rules' => 'required|min_length[4]|trim'
        ),
        array(
            'field' => 'tipo',
            'label' => 'Tipo de vehiculo',
            'rules' => 'callback_validarTipo'
        ),
        array(
            'field' => 'pasajeros',
            'label' => 'Pasajeros',
            'rules' => 'numeric|callback_validarPasajero'
        ),
      ),
    'login'=>array(
        array(
            'field' => 'usuario',
            'label' => 'Usuario',
            'rules' => 'required'
        ),
        array(
            'field' => 'password',
            'label' => 'Contraseña',
            'rules' => 'required'
        ),
    ),
    'email'=>array(
        array(
            'field' => 'mail',
            'label' => 'Email',
            'rules' => 'valid_email'
        ),
    ),
    'password'=>array(
        array(
            'field' => 'password',
            'label' => 'Contraseña',
            'rules' => 'required|min_length[6]|callback_validarPassword'
        ),
        array(
            'field' => 'confirmPassword',
            'label' => 'Confirmar contraseña',
            'rules' => 'required|min_length[6]|callback_validarPassword'
        ),
    )
);
