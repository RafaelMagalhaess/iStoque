	<div class="col-md-4 segura-form-login">
		<h2>Área Administrativa</h2>
		<hr>
		  <?php echo form_open("login/verifica"); ?>
  			<div class="form-group">
    			<label for="usuario">Usuário</label>
    			<input type="text" required class="form-control" name="login" id="usuario" placeholder="Usuário">
  			</div>
  
  			<div class="form-group">
    			<label for="senha">Senha</label>
    			<input type="password" required class="form-control" name="senha" id="senha" placeholder="Senha">
  			</div>
  			
  			<input type="submit" class="btn btn-primary pull-right" value="Entrar">
			<a href="#">Esqueceu a Senha?</a>
      <p>Para teste: admin/admin</p>
		<?php echo form_close(); ?>
    <?php echo validation_errors(); ?>
	</div>