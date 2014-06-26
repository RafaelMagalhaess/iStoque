$(document).ready(function(){
	$("#cpf-input").mask("000.000.000-00");
	$("#cnpj-input").mask("00.000.000/0000-00");
	$("#cep").mask("00.000-000");
	$("#ie").mask("0000000000000000000");
	$("#im").mask("0000000000000000000");
});

$("#cpf").change(function(){
	$("#cnpj-input").css("display","none");
	$("#cpf-input").css("display","block");
	$("#cpf-input").attr("name","cpf_cnpj");
	$("#cnpj-input").removeAttr("name");
	$("#cpf-input").prop("required", true);
	$("#cnpj-input").removeAttr("required");
});

$("#cnpj").change(function(){
	$("#cpf-input").css("display","none");
	$("#cnpj-input").css("display","block");
	$("#cnpj-input").attr("name","cpf_cnpj");
	$("#cpf-input").removeAttr("name");
	$("#cnpj-input").prop("required", true);
	$("#cpf-input").removeAttr("required");
});

$('select').on('change', function() {
  var teste = this.value;
});

//VALIDA FORM USUARIO CADASTRO
function validaMesmaSenha(){
	var senha = $("#senha").val();
	var senha2 = $("#senha2").val();

	if(senha != senha2){
		alert("Senhas não conferem!");
		return false;
	} else {
		return true;
	}
}

//VALIDA QUANTIDADE

function validaQnt(){
	
	var qnt = parseInt($('select option:selected').attr("data-qnt"));
	var qnt_inserida = parseInt($('#quantidade').val());
	if(qnt_inserida < 1 || qnt_inserida > qnt){
		alert("Insira uma quantidade válida!");
		return false;
	} else {
		return true;
	}
}