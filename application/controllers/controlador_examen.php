<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_examen extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function problema1()
	{
		$datos=array(
			'provincias'=>array(
				array(
					'nombre_provincia'=>'Huelva',
					'id_provincia'=>'1'
				),
				array(
					'nombre_provincia'=>'Malaga',
					'id_provincia'=>'2'
				)
			)

		);
		$this->load->view('formulario',$datos);
	}
	public function problema2()
	{
		$this->load->view('problema2');
	}
	public function problema3()
	{
		$this->load->view('problema3');
	}
	public function problema4()
	{
		$this->load->view('problema4');
	}
	public function problema5()
	{
		$this->load->view('problema5');
	}
	public function problema6()
	{
		$this->load->view('problema6');
	}
}

/* End of file controlador_examen.php */
/* Location: ./application/controllers/controlador_examen.php */