<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
class Fornecedor_model extends CI_Model {

  public function __construct(){
    parent::__construct();
  }

  public function listar(){
    $this->load->database();

    $query = $this->db->select()
    ->from('fornecedor')
    ->get();

    return $query->result();
  }

  public function get($id = null) {
    $this->db->select()->from('fornecedor');
 
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
      'razao'=>$this->input->post('razao'),
      'fantasia'=>$this->input->post('fantasia'),
      'cpf_cnpj'=>$this->input->post('cpf_cnpj'),
      'endereco'=>$this->input->post('endereco'),
      'complemento'=>$this->input->post('complemento'),
      'cep'=>$this->input->post('cep'),
      'bairro'=>$this->input->post('bairro'),
      'municipio'=>$this->input->post('municipio'),
      'uf'=>$this->input->post('uf'),
      'telefone'=>$this->input->post('telefone'),
      'ie'=>$this->input->post('ie'),
      'im'=>$this->input->post('im')
    );

    $this->db->insert('fornecedor',$data);
  }

  public function update(){
    $data = array(
      'id'=>$this->input->post('id'),
      'razao'=>$this->input->post('razao'),
      'fantasia'=>$this->input->post('fantasia'),
      'cpf_cnpj'=>$this->input->post('cpf_cnpj'),
      'endereco'=>$this->input->post('endereco'),
      'complemento'=>$this->input->post('complemento'),
      'cep'=>$this->input->post('cep'),
      'bairro'=>$this->input->post('bairro'),
      'municipio'=>$this->input->post('municipio'),
      'uf'=>$this->input->post('uf'),
      'telefone'=>$this->input->post('telefone'),
      'ie'=>$this->input->post('ie'),
      'im'=>$this->input->post('im')
    );

    $this->db->where('id', $data['id']);
    $this->db->update('fornecedor',$data);
  }

  public function excluir($id) {
    $this->db->where('id', $id);
    $this->db->delete('fornecedor');
  }
}

?>