<div class="col-md-12 form-group">
        
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
              echo "<td>". $row->login ."</td>";
              echo "<td>". $row->email ."</td>";
              echo "<td>". $row->tipoAcesso ."</td>";
              echo "<td>". $row->tipoSetor ."</td>";
              if($this->session->userdata['logado']['acesso'] == 1){
                echo "<td><a href='usuario/editar/". $row->id ."'><img class='edit' src='".base_url()."assets/img/edit.png'></a></td>";
                echo "<td><a href='usuario/excluir/". $row->id ."'><img class='delete' src='".base_url()."assets/img/delete.png'></a></td>";
              } else if(($this->session->userdata['logado']['setor'] == $row->setor) && ($row->acesso > 2) && $this->session->userdata['logado']['acesso'] > 3) {
                echo "<td><a href='usuario/editar/". $row->id ."'><img class='edit' src='".base_url()."assets/img/edit.png'></a></td>";
                echo "<td><a href='usuario/excluir/". $row->id ."'><img class='delete' src='".base_url()."assets/img/delete.png'></a></td>";
              } else {
                echo "<td></td>";
                echo "<td></td>";
              }
              echo "</tr>"; 
            }
            ?>
          </table>
        </div>