<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class funciones extends CI_Controller {

	
	public function index()
	{
		$this->load->view('view_1');
	}

	public function mi_primera_funcion(){
		$this->load->view('view_2');
	}

	
	public function mi_primera_funcion2(){
		$this->load->view('view_3');
	}

	public function mi_primera_funcion3(){
		$this->load->view('view_4');
	}

	public function mi_primera_funcion4(){
		$this->load->view('view_5');
	}

	
}  
