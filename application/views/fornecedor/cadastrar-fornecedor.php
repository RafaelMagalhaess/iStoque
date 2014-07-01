  <div class="col-md-7 segura-form-login">
		<h2>Cadastro de Fornecedor</h2>
		<hr>
		<?php echo form_open("fornecedor/cadastrar"); ?>
  			<div class="col-md-12">
          <div class="form-group">
      			<label for="razao">Razão Social*</label>
      			<input type="text" required class="form-control" id="razao" name="razao">
    			</div>
        </div>
			
      <div class="col-md-8">
			 <div class="form-group">
    			<label for="fantasia">Nome Fantasia</label>
          <input type="text" class="form-control" id="fantasia" name="fantasia">
  			</div>
      </div>

      <div class="col-md-4">
          <div class="form-group">
            <label for="cpf" style="margin-right:10px;"><input type="radio" checked id="cpf" name="cpf_cnpj_radio">CPF</label>
            <label for="cnpj"><input type="radio" id="cnpj" name="cpf_cnpj_radio">CNPJ</label>
            <input type="text" class="form-control" id="cpf-input" name="cpf_cnpj" required>
            <input type="text" class="form-control" id="cnpj-input" style="display:none;">
          </div>
        </div>

        <div class="col-md-8">
    			<div class="form-group">
      			<label for="endereco">Endereço*</label>
            <input type="text" required class="form-control" id="endereco" name="endereco">
    			</div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento">
          </div>
        </div>

        <div class="col-md-3">
         <div class="form-group">
          <label for="cep">CEP*</label>
          <input type="text" required class="form-control" id="cep" name="cep"><br>
        </div>
        </div>
			
			<div class="col-md-3">
         <div class="form-group">
          <label for="bairro">Bairro*</label>
          <input type="text" required class="form-control" id="bairro" name="bairro"><br>
        </div>
        </div>

        <div class="col-md-3">
         <div class="form-group">
          <label for="municipio">Município*</label>
          <input type="text" required class="form-control" id="municipio" name="municipio"><br>
        </div>
        </div>

        <div class="col-md-3">
         <div class="form-group">
          <label for="uf">UF*</label>
          <select class="form-control" required name="uf" id="uf">
            <option>Escolha o Estado</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espirito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraiba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ" selected>Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantis</option>
          </select>
        </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-md-3">
         <div class="form-group">
          <label for="email">Email*</label>
          <input type="email" required class="form-control" id="email" name="email">
        </div>
        </div>

        <div class="col-md-3">
         <div class="form-group">
          <label for="telefone">Telefone*</label>
          <input type="text" required class="form-control" id="telefone" name="telefone">
        </div>
        </div>

        <div class="col-md-3">
         <div class="form-group">
          <label for="ie">Inscrição Estadual*</label>
          <input type="text" required class="form-control" id="ie" name="ie">
        </div>
        </div>

        <div class="col-md-3">
         <div class="form-group">
          <label for="im">Inscrição Municipal*</label>
          <input type="text" required class="form-control" id="im" name="im">
        </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-md-12">
         <div class="form-group">
          <label for="contato">Contato</label>
          <textarea class="form-control" id="contato" name="contato" placeholder="Ex: João - (21)99999-9999 \ Maria - (21)88888-8888" maxlength="300"></textarea>
        </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-md-12">
          <div class="form-group">
            <button style="margin:10px 0 50px;" type="submit" class="btn btn-primary pull-right">Cadastrar Fornecedor</button>
          </div>
        </div>
	    <?php echo validation_errors('<p class="error">'); ?>
   <?php echo form_close(); ?>
	</div>