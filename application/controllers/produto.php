<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produto extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('produto_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->library('table');
		$this->load->helper('html');
		$data['query'] = $this->produto_model->listar();
		$this->load->view('includes/topo');
		$this->load->view('produto/ver-produto',$data);
		$this->load->view('includes/rodape');
	}

	public function cadastrar()
	{
		$this->form_validation->set_rules('nome', 'Nome do Produto', 'trim|required|is_unique[produto.nome]|xss_clean');
		$this->form_validation->set_rules('marca', 'Marca', 'trim|required|xss_clean');
		$this->form_validation->set_rules('quantidade', 'Quantidade', 'trim|required|xss_clean');
		

		if($this->form_validation->run() == FALSE){
			//$this->index();
		} else {
			$this->produto_model->cadastrar();
			redirect('produto');
		}


		$this->load->helper('url');
		$this->load->view('includes/topo');
		$this->load->view('produto/cadastrar-produto');
		$this->load->view('includes/rodape');
	}

	public function editar($id = null) {
	    if ($id == null) {
	      show_error('Nenhum id informado', 500);
	    }
	    else {
	      $data['view_name'] = 'produto/editar-produto';
	      $data['view_data'] = $this->produto_model->get($id);
	 
	 	  $this->load->view('includes/topo');
	      $this->load->view('page_view', $data);
	      $this->load->view('includes/rodape');
	    }
	  }

	  public function update() {

	  	$this->form_validation->set_rules('nome', 'Nome do Produto', 'trim|required|is_unique[produto.nome]|xss_clean');
		$this->form_validation->set_rules('marca', 'Marca', 'trim|required|xss_clean');
		$this->form_validation->set_rules('quantidade', 'Quantidade', 'trim|required|xss_clean');


		$this->produto_model->update();
		redirect('/produto');

	  }

	public function excluir($id = null) {
	    if ($id == null) {
	      show_error('Nenhum id informado', 500);
	    }
	    else {
	      $this->produto_model->excluir($id);
	      redirect('produto');
	    }
	}
}