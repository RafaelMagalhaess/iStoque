  <div class="col-md-7 segura-form-login">
    <h2>Cadastro de Produto</h2>
    <hr>
    <?php echo form_open("produto/cadastrar"); ?>
     <div class="col-md-6">

      <div class="col-md-12 form-group">
       <label for="nome">Nome do Produto*</label>
       <input type="text" name="nome" id="nome" class="form-control" maxlength="50">
     </div>

   </div>

   <div class="col-md-6">
    <div class="col-md-4 form-group">
      <label for="marca">Marca:</label>
      <input type="text" name="marca" id="marca" class="form-control" maxlength="20">
    </div>

    <div class="col-md-4 form-group">
      <label for="quantidade">Quantidade:</label>
      <input type="text" name="quantidade" id="quantidade" class="form-control" maxlength="10">
    </div>

    <div class="col-md-4 form-group">
      <label for="tipo">Tipo:</label>
      <select name="tipo" id="tipo" class="form-control">
        <option value="metros">Metro</option>
        <option value="unidades">Unidade</option>
        <option value="gramas">Peso (g)</option>
      </select>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="col-md-12">
    <div class="col-md-12 form-group">
      <label for="descricao">Descrição:</label>
      <textarea name="descricao" id="descricao" class="form-control" maxlength="30"></textarea>
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group">
      <button style="margin:10px 0 50px;" type="submit" class="btn btn-primary pull-right">Cadastrar Produto</button>
    </div>
  </div>

</div>

<?php echo validation_errors('<p class="error">'); ?>
     <?php echo form_close(); ?>
</div>