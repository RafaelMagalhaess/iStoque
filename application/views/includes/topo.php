<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
	<meta name="description" content="Sistema de Controle de Estoque">
	<title>Sistema de Controle de Estoque</title>
	<link rel="stylesheet" href="<?echo base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?echo base_url();?>assets/css/main.css">
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
            <li>
                <a href="<?echo base_url();?>requisicao/cadastrar">Fazer Requisição</a>
            </li>
            <li>
              <a href="<?echo base_url();?>requisicao">Requisições Pendentes <span class="badge">1</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nota Fiscal <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?echo base_url();?>notafiscal/cadastrar">+ Nova Nota Fiscal</a></li>
                  <li class="divider"></li>
                  <li><a href="<?echo base_url();?>notafiscal">Ver Notas Fiscais</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produto <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?echo base_url();?>produto">Ver Produtos</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fornecedor <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?echo base_url();?>fornecedor/cadastrar">+ Novo Fornecedor</a></li>
                  <li class="divider"></li>
                  <li><a href="<?echo base_url();?>fornecedor">Ver Fornecedores</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuário <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?echo base_url();?>usuario/cadastrar">+ Novo Usuário</a></li>
                  <li class="divider"></li>
                  <li><a href="<?echo base_url();?>usuario">Ver Usuários</a></li>
                  <li><a href="<?echo base_url();?>usuario/meus_dados/<?=$this->session->userdata['logado']['id']?>">Meus Dados</a></li>
                  <li><a href="<?echo base_url();?>home/logout">Sair</a></li>
                </ul>
            </li>
          </ul>
          </div>
      </nav><br><br><br>
      <div class="clearfix"></div>

      <?php } ?>