<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controlador extends CI_Controller {

	 
	public function consultar_usuarios()
	{
		$this->load->view('memu/view_header');
        $this->load->view('memu/view_1');
        $this->load->view('memu/view_footer');
		
	
	}

	public function consultar_usuarios2()
	{
		$this->load->view('memu/view_header');
        $this->load->view('memu/view_2');
        $this->load->view('memu/view_footer');
		
	
	}
	
	public function consultar_usuarios3()
	{
		$this->load->view('memu/view_header');
        $this->load->view('memu/view_3');
        $this->load->view('memu/view_footer');
		
	
	}

	
}  