<div class="col-md-12 form-group">

    <br>
    <a class="btn btn-success pull-left" href="<?echo base_url();?>usuario/cadastrar">Cadastrar novo usuário</a>
    <div class="clearfix"></div>
    <br>

    <hr>

    <form>
      <div class="form-group col-md-9">
        <h3>Buscar:</h3><div class="clearfix"></div>
        <div class="col-md-3" style="padding-left:0;">
          <select class="form-control">
            <option value="login">Login</option>
            <option value="email">Email</option>
            <option value="acesso">Acesso</option>
            <option value="setor">Setor</option>
          </select>
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" id="buscar" placeholder="Fazer Busca">
        </div>
      </div> 
    </form>

    <div class="clearfix"></div>
    <hr>
    <br>
    <br>
        
        <h2>Lista de Usuários</h2>

          <table class="table table-striped table-bordered">
            <tr>
              <td>Login</td>
              <td>Email</td>
              <td>Acesso</td>
              <td>Setor</td>
              <td>Editar</td>
              <td>Excluir</td>
            </tr>
           <?php 

            foreach($query as $row){
              echo "<tr>";
              echo "<td class='login'>". $row->login ."</td>";
              echo "<td class='email'>". $row->email ."</td>";
              echo "<td class='acesso'>". $row->tipoAcesso ."</td>";
              echo "<td class='setor'>". $row->tipoSetor ."</td>";
              if($this->session->userdata['logado']['acesso'] == 1){
                echo "<td><a href='usuario/editar/". $row->id ."'><img class='icon' src='".base_url()."assets/img/edit.png'></a></td>";
                echo "<td><a href='usuario/excluir/". $row->id ."'><img class='icon' src='".base_url()."assets/img/delete.png'></a></td>";
              } else if(($this->session->userdata['logado']['setor'] == $row->setor) && ($row->acesso > 2) && $this->session->userdata['logado']['acesso'] > 3) {
                echo "<td><a href='usuario/editar/". $row->id ."'><img class='icon' src='".base_url()."assets/img/edit.png'></a></td>";
                echo "<td><a href='usuario/excluir/". $row->id ."'><img class='icon' src='".base_url()."assets/img/delete.png'></a></td>";
              } else {
                echo "<td></td>";
                echo "<td></td>";
              }
              echo "</tr>"; 
            }
            ?>
          </table>
        </div>

<script type="text/javascript">

var atributo = ".login"
$('select').on('change', function() {
  atributo = '.'+this.value;

 $('.table-bordered').liveFilter('#buscar', 'tr', {
    filterChildSelector: atributo
  });

});
  
$('.table-bordered').liveFilter('#buscar', 'tr', {
    filterChildSelector: atributo
});

</script>