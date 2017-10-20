<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		
	}

	public function index()
	{
		$this->load->view('formulario');
	}

function validar()

{

		$name = $this->input->post('nombres');
		$lastname = $this->input->post('apellidos');
		$email= $this->input->post('correo');

echo "Nombre:".$name."Apellido: ".$lastname. "correo:".$email;

$data = array('nombre' => $this->input->post('nombres'),'apellido'  => $this->input->post('apellidos'), 'correo'=> $this->input->post('correo') );
		

		$this->form_model->guardar($data);


}

}
?>