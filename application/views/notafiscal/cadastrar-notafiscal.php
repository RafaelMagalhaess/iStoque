  <div class="col-md-7 segura-form-login">
		<h2>Cadastro de Nota Fiscal</h2>
		<hr>
		<form role="form">
  			<div class="col-md-6">
          
          <div class="col-md-4 form-group">
      			<label for="modelo">Modelo</label>
      			<select name="modelo" id="modelo" class="form-control">
              <option name="nf" id="nf">NF</option>   
            </select>
          </div>

          <div class="col-md-4 form-group">
            <label for="serie">Série</label>
            <input type="text" required class="form-control" id="serie" name="serie">
          </div>
  			
          <div class="col-md-4 form-group">
            <label for="numero">Número</label>
            <input type="text" required class="form-control" id="numero" name="numero">
          </div>

          <div class="col-md-6 form-group">
            <label for="serie">Emissão</label>
            <select class="form-control" id="emissao" name="emissao">
              <option>27/01/2014</option>
            </select>
          </div>

          <div class="col-md-6 form-group">
            <label for="serie">Lançamento</label>
            <select class="form-control" id="lancamento" name="lancamento">
              <option>27/01/2014</option>
            </select>
          </div>

          <div class="col-md-4 form-group">
            <label for="cfop">CFOP</label>
            <select name="cfop" id="cfop" class="form-control">
              <option value="">1102</option>
            </select>
          </div>

          <div class="col-md-4 form-group">
            <label for="lancamento">Grupo CFOP</label>
            <input type="text" disabled class="form-control" value="Compra">
          </div>
          
          <div class="col-md-4 form-group">
            <label for="grupo">CFOP Dif.</label>
            <select name="diferenciado" id="diferenciado" class="form-control">
              <option value="nao">Não</option>
              <option value="sim">Sim</option>
            </select>
          </div>
          
          <div class="clearfix"></div>
          <div class="col-md-12 form-group">
              <label for="fornecedor">Fornecedor</label>
              <select name="fornecedor" id="fornecedor" class="form-control">
                <option value="">Rafael Magalhães</option>
              </select>
          </div>
      </div>

      <div class="col-md-6">
        
        <div class="col-md-6 form-group">
          <label for="emissao">Tipo da Operação</label>
          <select name="emissao" id="emissao" class="form-control">
            <option value="">Para Revenda</option>
          </select>
        </div>

        <div class="col-md-6 form-group">
          <label for="lancamento">Situação do Doc.</label>
          <select name="lancamento" id="lancamento" class="form-control">
            <option value="">Documento Regular</option>
          </select>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12 form-group">
          <label for="marca">Tipo de Recolhimento para o ICMS:</label>
          <select name="marca" id="marca" class="form-control">
            <option value="rafael">Normal</option>
          </select>
        </div>

        <div class="col-md-6 form-group">
          <label for="categoria">Desc. não tributado:</label>
          <input type="text" class="form-control" placeholder="0,00">
        </div>

        <div class="col-md-6 form-group">
          <label for="subcategoria">Redução ICMS:</label>
          <input type="text" class="form-control" placeholder="0,00">
        </div>

        <div class="col-md-6 form-group">
          <label>Frete:</label>
          <input type="text" class="form-control" placeholder="0,00">
        </div>

        <div class="col-md-6 form-group">
          <label style="font-style: italic;margin-top: 46px;font-size: 16px;color: #666;float: right;">Total da Nota: R$40,00</label>
        </div>

      </div>
      <div class="clearfix"></div>
      <div class="col-md-12">
        <div class="col-md-12 form-group">
          <label for="desc">Observação Fiscal:</label>
          <input type="text" name="desc" id="desc" class="form-control">
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12 form-group">
          <table class="table table-striped table-bordered">
            <tr>
              <td>índice</td>
              <td>código do prod</td>
              <td>descriçao</td>
              <td>quantidade</td>
              <td>valor unitário</td>
              <td>valor total</td>
            </tr>
            <tr>
              <td>1</td>
              <td>45334534</td>
              <td>sei la</td>
              <td>2</td>
              <td>R$20,00</td>
              <td>R$40,00</td>
            </tr>
            <tr>
              <td>1</td>
              <td>45334534</td>
              <td>sei la</td>
              <td>2</td>
              <td>R$20,00</td>
              <td>R$40,00</td>
            </tr>
          </table>
        </div>
        <button type="submit" class="btn btn-success pull-left">Importar Nota Fiscal</button>
        <button type="submit" class="btn btn-primary pull-right" style="margin-bottom:30px;">Cadastrar Nota Fiscal</button>
      </div>
    </form>
	</div>