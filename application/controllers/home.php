<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		
		if($this->session->userdata('logado'))
		{
		 $this->session->userdata('logado');
		 $this->load->view('includes/topo');
		 $this->load->view('home_view');
		 $this->load->view('includes/rodape');
		}
		else
		{
		 //If no session, redirect to login page
		 redirect('login', 'refresh');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('logado');
		redirect('login', 'refresh');
	}
}