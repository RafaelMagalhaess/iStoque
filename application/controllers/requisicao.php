<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Requisicao extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('requisicao_model');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$this->load->library('table');
		$this->load->helper('html');
		$data['query'] = $this->requisicao_model->listar();
		$this->load->view('includes/topo');
		$this->load->view('requisicao/ver-requisicao',$data);
		$this->load->view('includes/rodape');
	}

	public function cadastrar()
	{
		$this->form_validation->set_rules('quantidade', 'Quantidade', 'required');

		if($this->form_validation->run() == FALSE){
			//$this->index();
		} else {
			$this->requisicao_model->cadastrar();
			redirect('requisicao');
		}

		$this->load->helper('url');
		$this->load->view('includes/topo');
		$this->load->view('requisicao/cadastrar-requisicao');
		$this->load->view('includes/rodape');
	}

	public function confirmar($id = null) {
	    if ($id == null) {
	      show_error('Nenhum id informado', 500);
	    }
	    else {
	      $this->requisicao_model->confirmar($id);
	      redirect('requisicao');
	    }
	  }

	public function negar($id = null) {
	    if ($id == null) {
	      show_error('Nenhum id informado', 500);
	    }
	    else {
	      $this->requisicao_model->negar($id);
	      redirect('requisicao');
	    }
	  }

	 public function aprovadas(){

		$this->load->library('table');
		$this->load->helper('html');
		$data['query'] = $this->requisicao_model->aprovadas();
		$this->load->view('includes/topo');
		$this->load->view('requisicao/ver-requisicao-aprovada',$data);
		$this->load->view('includes/rodape');
	}

	public function negadas(){

		$this->load->library('table');
		$this->load->helper('html');
		$data['query'] = $this->requisicao_model->negadas();
		$this->load->view('includes/topo');
		$this->load->view('requisicao/ver-requisicao-negada',$data);
		$this->load->view('includes/rodape');
	}
}