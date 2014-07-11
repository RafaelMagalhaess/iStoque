<div class="col-md-7 segura-form-login">
		<h2>Fazer nova requisição</h2>
		<hr>
		 <?php
          $js = array('onsubmit' => 'return validaQnt()');
      
          echo form_open("requisicao/cadastrar", $js);

          date_default_timezone_set('Brazil/East');
          $datestring = "%d/%m/%Y %H:%i";
          $time = time();
    ?>
  			<div class="col-md-12 req" id="content-requisicao">
          <input type="hidden" name="id_usuario[]" value="<?=$this->session->userdata['logado']['id']?>">
          <input type="hidden" name="id_setor[]" value="<?=$this->session->userdata['logado']['setor']?>">
          <input type="hidden" name="data[]" value="<?=mdate($datestring, $time)?>">
          <div class="col-md-4">
            <div class="form-group">
              <label for="produto">Produto*</label>
        			<select name="id_prod[]" id="produto" class="form-control prod">
               <?php
                $query = $this->db->query("SELECT * FROM produto WHERE quantidade > 0");
                if ($query->num_rows() > 0){
                  $i = 1;
                  foreach ($query->result() as $row) { ?>

              <option value="<?=$row->id;?>" data-qnt="<?=$row->quantidade;?>"><?=$row->nome;?></option>

              <?php $i++; } } ?>
              </select>
      			</div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="quantidade">Quantidade*</label>
              <input type="number" required class="form-control" id="quantidade" name="quantidade[]" maxlength="10">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="obs">Observação*</label>
              <input type="text" required class="form-control" name="obs[]" maxlength="200">
            </div>
          </div>
          <a href="javascript:;" onclick="apagaReq(this);" class="fechar">Fechar</a>
          <div class="clearfix"></div>
        <hr>

        </div>

        <div class="mais"></div>

        <div class="col-md-12" style="margin-bottom:30px;">

          <div class="col-md-6">
            <div class="form-group">
              <button type="button" onclick="duplicaReq();" class="btn btn-success pull-left">[+] Requisição</button>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <button type="submit" class="btn btn-primary pull-right">Fazer Requisição</button>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>


      <?php echo validation_errors('<p class="error">'); ?>
		 <?php echo form_close(); ?>
	</div>