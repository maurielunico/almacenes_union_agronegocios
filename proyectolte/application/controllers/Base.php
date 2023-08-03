<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //linea de seguiridad que impide la ejecutacion del http

//nombre de la clase base.php
class Base extends CI_Controller {

	//metodo 
	public function index()
	{
		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('inicio');
		$this->load->view('inc/pie');
	}

	public function productos()
	{
		$lista=$this->estudiante_model->listaestudiante();
		$data['productos']=$lista;

		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('productos');
		$this->load->view('inc/pie');
	}

	public function contactos()
	{
		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('contactos');
		$this->load->view('inc/pie');
	}
//metodo de prueba 
	public function pruebabd()
	{
		$query=$this->db->get('productos');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}
}
