<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
class Requisicao_model extends CI_Model {

  public function __construct(){
    parent::__construct();
    $this->load->helper('date');
  }

  public function listar(){
    $this->load->database();

    $query = $this->db->select('requisicao.*, usuario.login usuario, produto.nome produto, produto.tipo tipo, setor.tipoSetor setor')
    ->from('requisicao')
    ->join('usuario', 'usuario.id = requisicao.id_usuario', 'inner')
    ->join('produto', 'produto.id = requisicao.id_prod', 'inner')
    ->join('setor', 'setor.id = usuario.setor', 'inner')
    ->order_by("id", "desc")
    ->where('ativo', 1)
    ->get();

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

    $id_prod = $this->input->post('produto');
    $qnt = $this->input->post('quantidade');

    $data = array(
      'id_prod'=>$id_prod,
      'quantidade'=>$qnt,
      'id_usuario'=>$this->session->userdata['logado']['id'],
      'id_setor'=>$this->session->userdata['logado']['setor'],
      'id_setor'=>$this->session->userdata['logado']['setor'],
      'data'=>mdate($datestring, $time),
      'obs'=>$this->input->post('obs')
    );

    $this->db->insert('requisicao',$data);
    
    $this->db->set('quantidade', 'quantidade-'.$qnt, FALSE);
    $this->db->where('id', $id_prod);
    $this->db->update('produto');

  }

  public function excluir($id) {
    $this->db->where('id', $id);
    $this->db->delete('produto');
  }

  public function confirmar($id){
    
    $this->db->set('ativo', 0, FALSE);
    $this->db->where('id', $id);
    $this->db->update('requisicao');

  }

  public function negar($id){
    
    $this->db->set('ativo', 2, FALSE);
    $this->db->where('id', $id);
    $this->db->update('requisicao');

    $result = mysql_query("SELECT id_prod, quantidade FROM requisicao WHERE id =  $id");
    $row = mysql_fetch_array($result);

    $id_prod = $row['id_prod'];
    $qnt = $row['quantidade'];

    $this->db->set('quantidade', 'quantidade+'.$qnt, FALSE);
    $this->db->where('id', $id_prod);
    $this->db->update('produto');

  }
    
  public function aprovadas(){
    $this->load->database();

    $query = $this->db->select('requisicao.*, usuario.login usuario, produto.nome produto, produto.tipo tipo, setor.tipoSetor setor')
    ->from('requisicao')
    ->join('usuario', 'usuario.id = requisicao.id_usuario', 'inner')
    ->join('produto', 'produto.id = requisicao.id_prod', 'inner')
    ->join('setor', 'setor.id = usuario.setor', 'inner')
    ->order_by("id", "desc")
    ->where('ativo', 0)
    ->get();

    return $query->result();
  }

  public function negadas(){
    $this->load->database();

    $query = $this->db->select('requisicao.*, usuario.login usuario, produto.nome produto, produto.tipo tipo, setor.tipoSetor setor')
    ->from('requisicao')
    ->join('usuario', 'usuario.id = requisicao.id_usuario', 'inner')
    ->join('produto', 'produto.id = requisicao.id_prod', 'inner')
    ->join('setor', 'setor.id = usuario.setor', 'inner')
    ->order_by("id", "desc")
    ->where('ativo', 2)
    ->get();

    return $query->result();
  }

}

?>