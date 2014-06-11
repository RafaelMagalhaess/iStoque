<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NotaFiscal extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('includes/topo');
		$this->load->view('notafiscal/ver-notafiscal');
		$this->load->view('includes/rodape');
	}

	public function cadastrar()
	{
		$this->load->helper('url');
		$this->load->view('includes/topo');
		$this->load->view('notafiscal/cadastrar-notafiscal');
		$this->load->view('includes/rodape');
	}

	public function editar()
	{
		$this->load->helper('url');
		$this->load->view('includes/topo');
		$this->load->view('notafiscal/editar-notafiscal');
		$this->load->view('includes/rodape');
	}

	public function excluir()
	{
		$this->load->helper('url');
		$this->load->view('includes/topo');
		$this->load->view('notafiscal/excluir-notafiscal');
		$this->load->view('includes/rodape');
	}
}