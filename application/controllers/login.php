<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('usuario_model');
		$this->load->library('form_validation');
	}

	public function index(){
		$this->load->helper(array('form'));
		$this->load->view('includes/topo');
		$this->load->view('login');
		$this->load->view('includes/rodape');
	}

	public function verifica(){

	   $this->load->library('form_validation');

	   $this->form_validation->set_rules('login', 'Login', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('senha', 'Senha', 'trim|required|xss_clean|callback_check_database');

	   if($this->form_validation->run() == FALSE)
	   {
	     //Field validation failed.  User redirected to login page
	   	$this->load->view('includes/topo');
	     $this->load->view('login');
	     $this->load->view('includes/rodape');
	   }
	   else
	   {
	     //Go to private area
	     redirect('home', 'refresh');
	   }

	}

	public function check_database($senha){

	   //Field validation succeeded.  Validate against database
	   $login = $this->input->post('login');

	   //query the database
	   $result = $this->usuario_model->login($login, $senha);

	   if($result)
	   {
	     $sess_array = array();
	     foreach($result as $row)
	     {
	       $sess_array = array(
	         'id' => $row->id,
	         'login' => $row->login,
	         'senha' => $row->senha,
	         'email' => $row->email,
	         'acesso' => $row->acesso,
	         'setor' => $row->setor
	       );
	       $this->session->set_userdata('logado', $sess_array);
	     }
	     return TRUE;
	   }
	   else
	   {
	     $this->form_validation->set_message('check_database', 'Dados Inválidos.');
	     return false;
	   }
	 }
}