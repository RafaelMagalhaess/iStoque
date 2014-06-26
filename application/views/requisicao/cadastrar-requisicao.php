<div class="col-md-7 segura-form-login">
		<h2>Fazer nova requisição</h2>
		<hr>
		 <?php
          $js = array('onsubmit' => 'return validaQnt()');
      
          echo form_open("requisicao/cadastrar", $js);
    ?>
  			<div class="col-md-9">
          <div class="form-group">
            <label for="produto">Produto*</label>
      			<select name="produto" id="produto" class="form-control">
             <?php
              $query = $this->db->query("SELECT * FROM produto WHERE quantidade > 0");
              if ($query->num_rows() > 0){
                $i = 1;
                foreach ($query->result() as $row) { ?>

            <option value="<?=$row->id;?>" data-qnt="<?=$row->quantidade;?>"><?=$row->nome. " (".$row->quantidade." ".$row->tipo.")";?></option>

            <?php $i++; } } ?>
            </select>
    			</div>
        </div>
			
        <div class="col-md-3">
          <div class="form-group">
            <label for="quantidade">Quantidade*</label>
            <input type="number" required class="form-control" id="quantidade" name="quantidade" maxlength="10">
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="obs">Observação*</label>
            <textarea required class="form-control" id="obs" name="obs" maxlength="200"></textarea>
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