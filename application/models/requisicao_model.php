<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
class Requisicao_model extends CI_Model {

  public function __construct(){
    parent::__construct();
    $this->load->helper('date');
  }

  public function listar(){
    $this->load->database();

    $query = $this->db->select('requisicao.*, usuario.login')
    ->from('requisicao')
    ->join('usuario', 'usuario.id = requisicao.id_usuario', 'inner')
    ->where('ativo', 1)
    ->get();

    //$query = $this->db->get('usuario');
    return $query->result();
  }

  public function get($id = null) {
    $this->db->select()->from('produto');
 
    // where condition if id is present
    if ($id != null) {
      $this->db->where('id', $id);
    }
    else {
      $this->db->order_by('id');
    }
 
    $query = $this->db->get();
 
    if ($id != null) {
      return $query->row_array(); // single row
    }
    else {
      return $query->result_array(); // array of result
    }
  }

  public function cadastrar(){

    date_default_timezone_set('Brazil/East');
    $datestring = "%d/%m/%Y %H:%i";
    $time = time();

    $data = array(
      'id_setor'=>$this->session->userdata['logado']['setor'],
      'id_prod'=>$this->input->post('produto'),
      'quantidade'=>$this->input->post('quantidade'),
      'data'=>mdate($datestring, $time)
    );

    $this->db->insert('requisicao',$data);
  }

  public function update(){
    $data = array(
      'id'=>$this->input->post('id'),
      'nome'=>$this->input->post('nome'),
      'marca'=>$this->input->post('marca'),
      'quantidade'=>$this->input->post('quantidade'),
      'tipo'=>$this->input->post('tipo'),
      'descricao'=>$this->input->post('descricao')
    );

    $this->db->where('id', $data['id']);
    $this->db->update('produto',$data); // update the record
  }

  public function excluir($id) {
    $this->db->where('id', $id);
    $this->db->delete('produto');
  }
    
}

?>