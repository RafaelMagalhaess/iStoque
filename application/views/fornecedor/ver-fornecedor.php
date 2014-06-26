<div class="col-md-12 form-group">
        
        <h2>Lista de Fornecedores</h2>

          <table class="table table-striped table-bordered">
            <tr>
              <td>Nome Fantasia</td>
              <td>CPF / CNPJ</td>
              <td>Endereço</td>
              <td>UF</td>
              <td>Telefone</td>
              <td>Editar</td>
              <td>Excluir</td>
            </tr>
           <?php 

            foreach($query as $row){
              echo "<tr>";
              echo "<td>". $row->fantasia ."</td>";
              echo "<td>". $row->cpf_cnpj ."</td>";
              echo "<td>". $row->endereco ."</td>";
              echo "<td>". $row->uf ."</td>";
              echo "<td>". $row->telefone ."</td>";
              echo "<td><a href='/fornecedor/editar/". $row->id ."'><img class='icon' src='".base_url()."assets/img/edit.png'></a></td>";
              echo "<td><a href='/fornecedor/excluir/". $row->id ."'><img class='icon' src='".base_url()."assets/img/delete.png'></a></td>";
              echo "</tr>";
            }
            ?>
          </table>
        </div>