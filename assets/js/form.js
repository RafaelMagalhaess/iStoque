$(document).ready(function(){
	$("#cpf-input").mask("000.000.000-00");
	$("#cnpj-input").mask("00.000.000/0000-00");
	$("#cep").mask("00.000-000");
	$("#ie").mask("0000000000000000000");
	$("#im").mask("0000000000000000000");


	$("#cpf").change(function(){
		$("#cnpj-input").css("display","none");
		$("#cnpj-input").val("");
		$("#cpf-input").css("display","block");
		$("#cpf-input").attr("name","cpf_cnpj");
		$("#cnpj-input").removeAttr("name");
		$("#cpf-input").prop("required", true);
		$("#cnpj-input").removeAttr("required");
	});

	$("#cnpj").change(function(){
		$("#cpf-input").css("display","none");
		$("#cpf-input").val("");
		$("#cnpj-input").css("display","block");
		$("#cnpj-input").attr("name","cpf_cnpj");
		$("#cpf-input").removeAttr("name");
		$("#cnpj-input").prop("required", true);
		$("#cpf-input").removeAttr("required");
	});

});

//VALIDA QUANTIDADE

function validaQnt(){
	
	var prods = new Array();

	var i = 0;

	var produto = true;

	$(".prod").each(function(index) {

		prods.push($(this).val());

		if ($.inArray($(this).val(), prods) != i) {
			produto = false;
			return false;
		}

		i++;
	});

	var qnt = parseInt($('select option:selected').attr("data-qnt"));
	var qnt_inserida = parseInt($('#quantidade').val());

	if(qnt_inserida < 1 || qnt_inserida > qnt){
		alert("Insira uma quantidade válida!");
		return false;
	} else if(!produto) {
		alert("Produtos duplicados.");
		return false;
	} else {
		return true;
	}

}

//DUPLICA REQUISICAO
function duplicaReq(){
	var cloned = $("#content-requisicao").clone();
	$('.mais').append(cloned);
}

//APAGA REQUISICAO
function apagaReq(obj){
	var numItems = $('.req').length;

	if(numItems > 1)
		$(obj).parent().remove();
	else
		return false;
}