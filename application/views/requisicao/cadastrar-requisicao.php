<div class="col-md-7 segura-form-login">
		<h2>Fazer nova requisição</h2>
		<hr>
		 <?php echo form_open("requisicao/cadastrar"); ?>
  			<div class="col-md-9">
          <div class="form-group">
            <label for="produto">Produto*</label>
      			<select name="produto" id="produto" class="form-control">
              <option value="1">Toddynho</option>   
            </select>
    			</div>
        </div>
			
        <div class="col-md-3">
          <div class="form-group">
            <label for="quantidade">Quantidade*</label>
            <input type="text" required class="form-control" id="quantidade" name="quantidade" maxlength="10">
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <button style="margin:10px 0 50px;" type="submit" class="btn btn-primary pull-right">Fazer Requisição</button>
          </div>
        </div>

          <?php echo validation_errors('<p class="error">'); ?>
		 <?php echo form_close(); ?>
	</div>