<div class="col-md-12 form-group">
        
        <h2>Lista de Usuários</h2>

          <table class="table table-striped table-bordered">
            <tr>
              <td>Produto</td>
              <td>Quantidade</td>
              <td>Usuário</td>
              <td>Setor</td>
              <td>Data</td>
              <td>Confirmar</td>
              <td>Negar</td>
            </tr>
           <?php 

            foreach($query as $row){
              echo "<tr>";
              echo "<td>". $row->id_prod ."</td>";
              echo "<td>". $row->quantidade ."</td>";
              echo "<td>". $row->login ."</td>";
              echo "<td>". $row->id_setor ."</td>";
              echo "<td>". $row->data ."</td>";
              echo "<td>OK</td>";
              echo "<td>Não</td>";
              echo "</tr>"; 
            }
            ?>
          </table>
        </div>