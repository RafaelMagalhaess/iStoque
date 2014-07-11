  <div class="col-md-7 segura-form-login">
    <h2>Edição de Produto</h2>
    <hr>
    <?php echo form_open("produto/update"); ?>
     <div class="col-md-5">
      <input type="hidden" name="id" value="<?=$view_data['id'];?>">
      <div class="col-md-12 form-group">
       <label for="nome">Nome do Produto*</label>
       <input type="text" name="nome" id="nome" class="form-control" maxlength="50" value="<?=$view_data['nome'];?>">
     </div>

   </div>

   <div class="col-md-7">
    <div class="col-md-4 form-group">
      <label for="marca">Marca:</label>
      <input type="text" name="marca" id="marca" class="form-control" maxlength="20" value="<?=$view_data['marca'];?>">
    </div>

    <div class="col-md-4 form-group">
      <label for="quantidade">Quantidade:</label>
      <input type="text" name="quantidade" id="quantidade" class="form-control" maxlength="10" value="<?=$view_data['quantidade'];?>">
    </div>

    <div class="col-md-4 form-group">
      <label for="tipo">Tipo:</label>
      <select disabled class="form-control">
        <?php
          if($view_data['tipo'] == "unidades")
            $tipo = "Unidade";
          else if($view_data['tipo'] == "metros")
            $tipo = "Metro";
          else if($view_data['tipo'] == "gramas")
            $tipo = "Peso (g)";
          else
            $tipo = "Unidade";
        ?>
        <option><?=$tipo;?></option>
      </select>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="col-md-12">
    <div class="col-md-12 form-group">
      <label for="descricao">Descrição:</label>
      <textarea name="descricao" id="descricao" class="form-control" maxlength="30"><?=$view_data['descricao'];?></textarea>
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group">
      <button style="margin:10px 0 50px;" type="submit" class="btn btn-primary pull-right">Editar Produto</button>
    </div>
  </div>

</div>

<?php echo validation_errors('<p class="error">'); ?>
     <?php echo form_close(); ?>
</div>