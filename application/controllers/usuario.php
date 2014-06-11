<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('usuario_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		// $this->load->helper('url');
		// $this->load->view('includes/topo');
		// $this->load->view('usuario/ver-usuario');
		// $this->load->view('includes/rodape');

		$this->load->library('table');
		$this->load->helper('html');
		$data['query'] = $this->usuario_model->listar();
		$this->load->view('includes/topo');
		$this->load->view('usuario/ver-usuario',$data);
		$this->load->view('includes/rodape');
	}

	public function cadastrar()
	{

		$this->form_validation->set_rules('login', 'Login', 'trim|required|min_length[4]|is_unique[usuario.login]|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[usuario.email]');
		$this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('senha2', 'Confirme a senha', 'trim|required|matches[senha]');

		if($this->form_validation->run() == FALSE){
			//$this->index();
		} else {
			$this->usuario_model->cadastrar();
			redirect('usuario');
		}


		$this->load->helper('url');
		$this->load->view('includes/topo');
		$this->load->view('usuario/cadastrar-usuario');
		$this->load->view('includes/rodape');
	}

	public function editar($id = null) {
	    if ($id == null) {
	      show_error('Nenhum id informado', 500);
	    }
	    else {
	      $data['view_name'] = 'usuario/editar-usuario';
	      $data['view_data'] = $this->usuario_model->get($id);
	 
	 	  $this->load->view('includes/topo');
	      $this->load->view('page_view', $data);
	      $this->load->view('includes/rodape');
	    }
	  }

	  public function meus_dados($id = null) {
	    if ($id == null || $id != $this->session->userdata['logado']['id']) {
	      show_error('Nenhum id informado', 500);
	    }
	    else {
	      $data['view_name'] = 'usuario/meus-dados';
	      $data['view_data'] = $this->usuario_model->get($id);
	 
	 	  $this->load->view('includes/topo');
	      $this->load->view('page_view', $data);
	      $this->load->view('includes/rodape');
	    }
	  }

	  public function update() {

	  	$this->form_validation->set_rules('login', 'Login', 'trim|required|min_length[4]|is_unique[usuario.login]|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[usuario.email]');
		$this->form_validation->set_rules('senha', 'Senha', 'trim|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('senha2', 'Confirme a senha', 'trim|matches[senha]');


		$this->usuario_model->update();
		redirect('/usuario');

	  }

	public function excluir($id = null) {
	    if ($id == null) {
	      show_error('Nenhum id informado', 500);
	    }
	    else {
	      $this->usuario_model->excluir($id);
	      redirect('usuario');
	    }
	}
}