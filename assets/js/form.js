$(document).ready(function(){
	$("#cpf-input").mask("000.000.000-00");
	$("#cnpj-input").mask("00.000.000/0000-00");
	$("#cep").mask("00.000-000");
	$("#estadual").mask("0000000000000000000");
	$("#municipal").mask("0000000000000000000");
});

$("#cpf").change(function(){
	$("#cnpj-input").css("display","none");
	$("#cpf-input").css("display","block");
});

$("#cnpj").change(function(){
	$("#cpf-input").css("display","none");
	$("#cnpj-input").css("display","block");
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