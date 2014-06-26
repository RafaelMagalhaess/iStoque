<div class="col-md-12 form-group">
        
        <h2>Requisições Pendentes</h2>

          <table class="table table-striped table-bordered">
            <tr>
              <td>Produto</td>
              <td>Quantidade</td>
              <td>Usuário</td>
              <td>Setor</td>
              <td>Data da Requisição</td>
              <td>Autorizar</td>
              <td>Negar</td>
            </tr>
           <?php 

            foreach($query as $row){

              echo "<tr>";
              echo "<td>". $row->produto ."</td>";
              echo "<td>".$row->quantidade." ".$row->tipo."</td>";
              echo "<td>". $row->usuario ."</td>";
              echo "<td>". $row->setor ."</td>";
              echo "<td>". $row->data ."</td>";
              echo "<td><a href='requisicao/confirmar/". $row->id ."'><img class='icon' src='".base_url()."assets/img/confirm.png'></a></td>";
              echo "<td><a href='requisicao/negar/". $row->id ."'><img class='icon' src='".base_url()."assets/img/delete.png'></a></td>";
              echo "</tr>"; 
            }

             //echo $this->db->last_query();
            ?>
          </table>
        </div>