<?php
/**
 * Created by PhpStorm.
 * User: xtianrock
 * Date: 11/02/2015
 * Time: 2:36
 */

$config = array(
    'registro'=>array(
        array(
            'field' => 'usuario',
            'label' => 'Usuario',
            'rules' => 'required|min_length[6]|callback_validarUsuario'
        ),
        array(
            'field' => 'mail',
            'label' => 'Email',
            'rules' => 'valid_email'
        ),
        array(
            'field' => 'apellidos',
            'label' => 'Apellidos',
            'rules' => 'required|callback_validarNombre'
        ),
        array(
            'field' => 'direccion',
            'label' => 'Direccion',
            'rules' => 'required|callback_validarDireccion'
        ),
        array(
            'field' => 'provincias_id_provincia',
            'label' => 'Provincia',
            'rules' => 'required|numeric|less_than[53]|graeter_than[0]'
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
