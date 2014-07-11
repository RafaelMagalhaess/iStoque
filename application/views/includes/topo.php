<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
	<meta name="description" content="Sistema de Controle de Estoque">
	<title>Sistema de Controle de Estoque</title>
	<link rel="stylesheet" href="<?echo base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?echo base_url();?>assets/css/main.css">

  <script type="text/javascript" src="<?echo base_url();?>assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?echo base_url();?>assets/js/mask.js"></script>
  <script type="text/javascript" src="<?echo base_url();?>assets/js/form.js"></script>
  <script type="text/javascript" src="<?echo base_url();?>assets/js/jquery.liveFilter.js"></script>
</head>
<body>
  <?php if($this->session->userdata('logado')) { ?>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
        </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Requisição <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?echo base_url();?>requisicao/cadastrar">Fazer Requisição</a></li>
                  <li>
                    <a href="<?echo base_url();?>requisicao">Requisições Pendentes <span class="badge">
                    <?php
                      $this->load->database();
                      
                      $result = mysql_query("SELECT COUNT(id) FROM requisicao WHERE ativo =  '1'");

                      $count = mysql_fetch_array($result);

                      echo $count[0];
                    ?></span>
                    </a>
                  </li>
                   <li><a href="<?echo base_url();?>requisicao/aprovadas">Requisições Aprovadas</a></li>
                    <li><a href="<?echo base_url();?>requisicao/negadas">Requisições Negadas</a></li>
                </ul>
            </li>
            <li><a href="<?echo base_url();?>nota-fiscal">Nota Fiscal</a></li>
            <li><a href="<?echo base_url();?>produto">Produto</a></li>
            <li><a href="<?echo base_url();?>fornecedor">Fornecedor</a></li>
            <li><a href="<?echo base_url();?>usuario">Usuário</a></li>
          </ul>
          </div>
      </nav><br><br><br>
      <div class="clearfix"></div>

      <?php } ?>