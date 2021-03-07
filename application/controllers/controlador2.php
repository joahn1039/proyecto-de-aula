<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controlador2 extends CI_Controller {

	 
	public function consultar_usuarios4()
	{
	    $this->load->view('memu/view_header');
	    $this->load->view('memu/view_4');
		$this->load->view('memu/view_footer');
	}

	public function consultar_usuarios5()
	{
	    $this->load->view('memu/view_header');
	    $this->load->view('memu/view_5');
		$this->load->view('memu/view_footer');
	}
}  