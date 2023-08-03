<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //linea de seguiridad que impide la ejecutacion del htt


class Welcome extends CI_Controller {

	//metodo 
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
