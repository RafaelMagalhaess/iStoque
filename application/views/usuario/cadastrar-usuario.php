<div class="col-md-7 segura-form-login">
		<h2>Cadastro de Usuário</h2>
		<hr>
		 <?php echo form_open("usuario/cadastrar"); ?>
  			<div class="col-md-6">
          <div class="form-group">
      			<label for="login">Usuário*</label>
      			<input type="text" required class="form-control" id="login" name="login" maxlength="15">
    			</div>
        </div>
			
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email*</label>
            <input type="email" required class="form-control" id="email" name="email" maxlength="50">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="senha">Senha*</label>
            <input type="password" required class="form-control" id="senha" name="senha" maxlength="30">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="senha2">Confirme a senha*</label>
            <input type="password" required class="form-control" id="senha2" name="senha2" maxlength="30">
          </div>
        </div>

        <div class="col-md-6">
          <label for="acesso">Nível de Acesso*</label>
          <select name="acesso" id="acesso" class="form-control">
            <?php
              $query = $this->db->query("SELECT * FROM acesso");
              if ($query->num_rows() > 0)
                foreach ($query->result() as $row) { ?>

            <option value="<?=$row->id;?>"><?=$row->tipoAcesso;?></option>

            <?php } ?>

          </select>
        </div>

        <div class="col-md-6">
          <label for="setor">Setor*</label>
          <select name="setor" id="setor" class="form-control">
            <?php
              $query = $this->db->query("SELECT * FROM setor");
              if ($query->num_rows() > 0)
                foreach ($query->result() as $row) { ?>
              
            <option value="<?=$row->id;?>"><?=$row->tipoSetor;?></option>

            <?php } ?>

          </select>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <button style="margin:10px 0 50px;" type="submit" class="btn btn-primary pull-right">Cadastrar Usuário</button>
          </div>
        </div>

          <?php echo validation_errors('<p class="error">'); ?>
		 <?php echo form_close(); ?>
	</div>