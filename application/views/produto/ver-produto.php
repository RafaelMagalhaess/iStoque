<div class="col-md-12 form-group">
        
        <br>
		<a class="btn btn-success pull-left" href="<?echo base_url();?>produto/cadastrar">+ Cadastrar novo produto</a>
		<br><br>

        <h2>Lista de Produto <span style="font-size:14px;">m = metro / u = unidade / g = gramas</span></h2>

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
              echo "<tr>";
              echo "<td>". $row->nome ."</td>";
              echo "<td>". $row->marca ."</td>";
              echo "<td>". $row->quantidade ." ". $row->tipo . "</td>";
              echo "<td>". $row->descricao ."</td>";
              echo "<td><a href='produto/editar/". $row->id ."'><img class='edit' src='".base_url()."assets/img/edit.png'></a></td>";
                echo "<td><a href='produto/excluir/". $row->id ."'><img class='delete' src='".base_url()."assets/img/delete.png'></a></td>";
              echo "</tr>"; 
            }
            ?>
          </table>
        </div>