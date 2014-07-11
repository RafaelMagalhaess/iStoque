<div class="col-md-12 form-group">
        
    <br>
		<a class="btn btn-success pull-left" href="<?echo base_url();?>produto/cadastrar">Cadastrar novo produto</a>
    <div class="clearfix"></div>
    <br>

    <hr>

    <form>
      <div class="form-group col-md-9">
        <h3>Buscar:</h3><div class="clearfix"></div>
        <div class="col-md-3" style="padding-left:0;">
          <select class="form-control">
            <option value="nome">Nome do Produto</option>
            <option value="marca">Marca</option>
            <option value="quantidade">Quantidade</option>
            <option value="descricao">Descrição</option>
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

        <h2>Lista de Produtos</h2>

          <table class="table table-striped table-bordered">
            <tr>
              <td>Nome do Produto</td>
              <td>Marca</td>
              <td>Quantidade em estoque</td>
              <td>Descrição</td>
              <td>Editar</td>
              <td>Excluir</td>
            </tr>
           <?php 

            foreach($query as $row){
              if($row->quantidade == 0)
                $naotem = "danger";
              else
                $naotem = "";
          
              echo "<tr class='".$naotem."'>";
              echo "<td class='nome'>". $row->nome ."</td>";
              echo "<td class='marca'>". $row->marca ."</td>";
              echo "<td class='quantidade'>". $row->quantidade ." ". $row->tipo . "</td>";
              echo "<td class='descricao'>". $row->descricao ."</td>";
              echo "<td><a href='produto/editar/". $row->id ."'><img class='icon' src='".base_url()."assets/img/edit.png'></a></td>";
              echo "<td><a href='produto/excluir/". $row->id ."'><img class='icon' src='".base_url()."assets/img/delete.png'></a></td>";
              echo "</tr>"; 
            }
            ?>
          </table>
        </div>

<script type="text/javascript">

var atributo = ".nome"
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