<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
class Produto_model extends CI_Model {

  public function __construct(){
    parent::__construct();
  }

  public function listar(){
    $this->load->database();

    $query = $this->db->select()->from('produto')->get();

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
    $data = array(
      'nome'=>$this->input->post('nome'),
      'marca'=>$this->input->post('marca'),
      'quantidade'=>$this->input->post('quantidade'),
      'tipo'=>$this->input->post('tipo'),
      'descricao'=>$this->input->post('descricao')
    );

    $this->db->insert('produto',$data);
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