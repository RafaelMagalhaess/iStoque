<div class="col-md-12 form-group">
        
        <h2>Requisições Aprovadas</h2>

          <table class="table table-striped table-bordered">
            <tr>
              <td>Produto</td>
              <td>Quantidade</td>
              <td>Usuário</td>
              <td>Setor</td>
              <td>Data da Requisição</td>
            </tr>
           <?php 

            foreach($query as $row){

              echo "<tr>";
              echo "<td>". $row->produto ."</td>";
              echo "<td>".$row->quantidade." ".$row->tipo."</td>";
              echo "<td>". $row->usuario ."</td>";
              echo "<td>". $row->setor ."</td>";
              echo "<td>". $row->data ."</td>";
              echo "</tr>"; 
            }

             //echo $this->db->last_query();
            ?>
          </table>
        </div>