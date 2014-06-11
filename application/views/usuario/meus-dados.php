<div class="col-md-7 segura-form-login meus-dados">
		<h2>Meus Dados</h2>
		<hr>
		 <?php echo form_open("usuario/update"); ?>
  			<div class="col-md-6">
          <input type="hidden" name="id" value="<?=$view_data['id'];?>">
          <div class="form-group">
      			<label for="login">Usuário*</label>
      			<input readonly type="text" required class="form-control" id="login" name="login" maxlength="15" value="<?=$this->session->userdata['logado']['login'];?>">
    			</div>
        </div>
			
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email*</label>
            <input type="email" required class="form-control" id="email" name="email" maxlength="50" value="<?=$this->session->userdata['logado']['email'];?>">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="senha">Nova Senha*</label>
            <input type="password" class="form-control" id="senha" name="senha" maxlength="30">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="senha2">Confirme a nova senha*</label>
            <input type="password" class="form-control" id="senha2" name="senha2" maxlength="30">
          </div>
        </div>

        <div class="col-md-6">
          <label for="acesso">Nível de Acesso*</label>
          <select readonly name="acesso" id="acesso" class="form-control">
            <?php
              $query = $this->db->query("SELECT * FROM acesso");
              if ($query->num_rows() > 0)
                foreach ($query->result() as $row) { ?>

            <option value="<?=$row->id;?>" <?php echo ($view_data['acesso'] == $this->session->userdata['logado']['acesso']) ? 'selected' : ''; ?>><?=$row->tipoAcesso;?></option>

            <?php } ?>

          </select>
        </div>

        <div class="col-md-6">
          <label for="setor">Setor*</label>
          <select readonly name="setor" id="setor" class="form-control">
            <?php
            $id = $this->session->userdata['logado']['setor'];
              $query = $this->db->query("SELECT * FROM setor WHERE id = $id");
              if ($query->num_rows() > 0)
                foreach ($query->result() as $row) { ?>
              
            <option value="<?=$row->id;?>" <?php echo ($view_data['setor'] == $id) ? 'selected' : ''; ?>><?=$row->tipoSetor;?></option>

            <?php } ?>

          </select>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <button style="margin:10px 0 50px;" type="submit" class="btn btn-primary pull-right">Alterar meus dados</button>
          </div>
        </div>

          <?php echo validation_errors('<p class="error">'); ?>
		 <?php echo form_close(); ?>
	</div>