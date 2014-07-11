<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fornecedor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('fornecedor_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->library('table');
		$this->load->helper('html');
		$data['query'] = $this->fornecedor_model->listar();
		$this->load->view('includes/topo');
		$this->load->view('fornecedor/ver-fornecedor',$data);
		$this->load->view('includes/rodape');
	}

	public function cadastrar()
	{

		$this->form_validation->set_rules('razao', 'Razão Social', 'trim|required|min_length[4]|is_unique[fornecedor.razao]|xss_clean');
		$this->form_validation->set_rules('cpf_cnpj', 'CPF/CNPJ', 'trim|required|min_length[11]|is_unique[fornecedor.cpf_cnpj]');
		$this->form_validation->set_rules('endereco', 'Endereço', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('cep', 'CEP', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('bairro', 'Bairro', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('municipio', 'Município', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('uf', 'UF', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[fornecedor.email]');
		$this->form_validation->set_rules('telefone', 'Telefone', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('contato', 'Contato', 'trim|min_length[8]');
		$this->form_validation->set_rules('ie', 'Inscrição Estadual', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('im', 'Inscrição Municipal', 'trim|required|min_length[4]');

		if($this->form_validation->run() == FALSE){
			//$this->index();
		} else {
			$this->fornecedor_model->cadastrar();
			redirect('fornecedor');
		}


		$this->load->helper('url');
		$this->load->view('includes/topo');
		$this->load->view('fornecedor/cadastrar-fornecedor');
		$this->load->view('includes/rodape');
	}

	public function editar($id = null) {
	    if ($id == null) {
	      show_error('Nenhum id informado', 500);
	    }
	    else {
	      $data['view_name'] = 'fornecedor/editar-fornecedor';
	      $data['view_data'] = $this->fornecedor_model->get($id);
	 
	 	  $this->load->view('includes/topo');
	      $this->load->view('page_view', $data);
	      $this->load->view('includes/rodape');
	    }
	  }


	  public function update() {

		$this->form_validation->set_rules('endereco', 'Endereço', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('cep', 'CEP', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('bairro', 'Bairro', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('municipio', 'Município', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('uf', 'UF', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[fornecedor.email]');
		$this->form_validation->set_rules('telefone', 'Telefone', 'trim|required|min_length[8]');


		$this->fornecedor_model->update();
		redirect('fornecedor');

	  }

	public function excluir($id = null) {
	    if ($id == null) {
	      show_error('Nenhum id informado', 500);
	    }
	    else {
	      $this->fornecedor_model->excluir($id);
	      redirect('fornecedor');
	    }
	}
}