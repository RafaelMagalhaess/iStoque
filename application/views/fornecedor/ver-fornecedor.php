<div class="col-md-12 form-group">

    <br>
    <a class="btn btn-success pull-left" href="<?echo base_url();?>fornecedor/cadastrar">Cadastrar novo fornecedor</a>
    <br><br>
        
        <h2>Lista de Fornecedores</h2>

          <table class="table table-striped table-bordered">
            <tr>
              <td>Razão Social</td>
              <td>Nome Fantasia</td>
              <td>Telefone da Empresa</td>
              <td>Editar</td>
              <td>Excluir</td>
            </tr>
           <?php 

            foreach($query as $row){
              echo "<tr>";
              echo "<td><a href='javascript:;' data-toggle='modal' data-target='#myModal$row->id'>". $row->razao ."</a></td>";
              echo "<td>". $row->fantasia ."</td>";
              echo "<td>". $row->telefone ."</td>";
              echo "<td><a href='/fornecedor/editar/". $row->id ."'><img class='icon' src='".base_url()."assets/img/edit.png'></a></td>";
              echo "<td><a href='/fornecedor/excluir/". $row->id ."'><img class='icon' src='".base_url()."assets/img/delete.png'></a></td>";
              echo "</tr>";
            ?>

            <div class="modal fade" id="myModal<?=$row->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><?=$row->razao?></h4>
                  </div>
                  <div class="modal-body">
                    <p><strong>Razão Social:</strong> <em><?=$row->razao;?></em></p>
                    <p><strong>Nome Fantasia:</strong> <em><?=$row->fantasia;?></em></p>
                    <p><strong>CPF/CNPJ:</strong> <em><?=$row->cpf_cnpj;?></em></p>
                    <p><strong>Endereço:</strong> <em><?=$row->endereco;?></em></p>
                    <p><strong>Complemento:</strong> <em><?=$row->complemento;?></em></p>
                    <p><span><strong>CEP:</strong> <em><?=$row->cep;?></span> <span style="margin-left:10px;"><strong>Bairro:</strong> <em><?=$row->bairro;?></em></span></p>
                    <p><span><strong>Município:</strong> <em><?=$row->municipio;?></span> <span style="margin-left:10px;"><strong>UF:</strong> <em><?=$row->uf;?></em></span></p>
                    <p><strong>Email:</strong> <em><?=$row->email;?></em></p>
                    <p><strong>Telefone:</strong> <em><?=$row->telefone;?></em></p>
                    <p><strong>Contato:</strong> <em><?=$row->contato;?></em></p>
                    <p><strong>Inscrição Estadual:</strong> <em><?=$row->ie;?></em></p>
                    <p><strong>Inscrição Municipal:</strong> <em><?=$row->im;?></em></p>
                  </div>
                  <div class="modal-footer">
                    <a href="/fornecedor/excluir/<?=$row->id;?>" class="btn btn-danger pull-left">Excluir</a>
                    <a href="/fornecedor/editar/<?=$row->id;?>" class="btn btn-primary">Editar</a>
                    <a class="btn btn-default" data-dismiss="modal">Fechar</a>
                  </div>
                </div>
              </div>
            </div>



           <?php } ?>
          </table>
        </div>


