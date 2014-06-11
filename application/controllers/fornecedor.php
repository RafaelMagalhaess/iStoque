<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fornecedor extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$this->load->view('includes/topo');
		$this->load->view('fornecedor/ver-fornecedor');
		$this->load->view('includes/rodape');
	}

	public function cadastrar()	{
		$this->load->helper('url');
		$this->load->view('includes/topo');
		$this->load->view('fornecedor/cadastrar-fornecedor');
		$this->load->view('includes/rodape');
	}

	public function editar() {
		$this->load->helper('url');
		$this->load->view('includes/topo');
		$this->load->view('fornecedor/editar-fornecedor');
		$this->load->view('includes/rodape');
	}

	public function excluir() {
		$this->load->helper('url');
		$this->load->view('includes/topo');
		$this->load->view('fornecedor/excluir-fornecedor');
		$this->load->view('includes/rodape');
	}
}