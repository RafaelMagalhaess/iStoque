<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
class Usuario_model extends CI_Model {

  public function __construct(){
    parent::__construct();
  }

  public function listar(){
    $this->load->database();

    $query = $this->db->select('usuario.*, acesso.tipoAcesso tipoAcesso, setor.tipoSetor tipoSetor')
    ->from('usuario')
    ->join('acesso', 'acesso.id = usuario.acesso', 'inner')
    ->join('setor', 'setor.id = usuario.setor', 'inner')
    ->get();

    return $query->result();
  }

  public function get($id = null) {
    $this->db->select()->from('usuario');
 
    if ($id != null) {
      $this->db->where('id', $id);
    }
    else {
      $this->db->order_by('id');
    }
 
    $query = $this->db->get();
 
    if ($id != null) {
      return $query->row_array();
    }
    else {
      return $query->result_array();
    }
  }

  public function cadastrar(){
    $data = array(
      'login'=>$this->input->post('login'),
      'email'=>$this->input->post('email'),
      //'senha'=>md5($this->input->post('senha')),
      'senha'=>$this->input->post('senha'),
      'acesso'=>$this->input->post('acesso'),
      'setor'=>$this->input->post('setor')
    );

    $this->db->insert('usuario',$data);
  }

  public function update(){
    $senha = $this->input->post('senha');
    $data = array(
      'id'=>$this->input->post('id'),
      'login'=>$this->input->post('login'),
      'email'=>$this->input->post('email'),
      'acesso'=>$this->input->post('acesso'),
      'setor'=>$this->input->post('setor')
    );

    if($senha != ""){
      $data['senha'] = $this->input->post('senha');
    }

    $this->db->where('id', $data['id']);
    $this->db->update('usuario',$data);
  }

  public function excluir($id) {
    $this->db->where('id', $id);
    $this->db->delete('usuario');
  }

  public function login($login, $senha){
    $this->db->select();
    $this->db->from('usuario');
    $this->db->where('login', $login);
    $this->db->where('senha', $senha);
    $this->db->limit(1);

    $query = $this->db->get();

    if($query->num_rows() == 1)
      return $query->result();
    else
      return false;
  }
}

?>