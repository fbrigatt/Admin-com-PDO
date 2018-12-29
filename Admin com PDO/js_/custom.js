$(document).ready(function(){
	
	// Manipula o Formulário form_login
	$('form[name="form_login"]').submit(function(){
		
		var forma = $(this); // forma = formulário de login
		var botao = $(this).find(':button'); // seleciona o botão do formulário


		
		//console.log('Clicou'); // clicou no botão
		//$(this).fadeOut('fast'); // oculta formulário
		
		
		// botao.attr('disabled', true); // desabilita o botão
		// botao.html('Aguarde, carregando...'); // muda o texto do botao
		
		// console.log($(this).serialize()); // recupera valores do formulário
		
		$.ajax({
			url: "ajax/controller.php",
			type: "POST",
			data: "acao=login&"+forma.serialize(),
			beforeSend: function(){
				botao.html('Aguarde').attr('disabled', true);
			},
			success: function(retorno){ // retorna o quem do Controller.php
				botao.attr('disabled', false).html('<span class="glyphicon glyphicon-user"></span> Logar');
				//console.log(retorno);
				
				if(retorno === 'vazio'){
					msg('Campos Login e Senha são Obrigatórios.', 'alerta');
				} else if (retorno === 'naoexiste') {
					msg('Login ou Senha Inválidos.', 'erro');
				} else if (retorno === 'diferentesenha') {
					msg('Login ou Senha Inválidos.', 'info');
				} else if (retorno === 'nivel') {
					msg('Você não possui permissão para continuar.', 'erro');
				} else {
					// REDIRECIONA SE DER TUDO OK
					forma.fadeOut('fast', function(){  // Oculta Formulário de Login
						msg('Login Efetuado com Sucesso, Aguarde...', 'sucesso');
						$('#load').fadeIn('slow');
					});
					
					setTimeout(function(){
						$(location).attr('href', './painel/painel.php');
					},3000);
					
				}
				
			}
		});
		
		return false;
	});
	
	// FUNÇÕES GERAIS
	function msg(msg, tipo){
		
		var retorno = $('.retorno'); // Recupera classe Retorno da div Mensagens
		var tipo = (tipo === 'sucesso') ? 'success' : (tipo === 'alerta') ? 'warning' : (tipo === 'erro') ? 'danger' : (tipo === 'info') ? 'info' : alert('Erro de Mensagem');
		
		retorno.empty().fadeOut('fast', function(){
			return $(this).html('<div class="alert alert-'+tipo+'">'+msg+'</div>').fadeIn('slow');
		});
		
		setTimeout(function(){
			retorno.fadeOut('slow').empty();
		}, 6000);
	}
	
	
});

/* Link https://www.youtube.com/playlist?list=PLTkD99pbMAkIHbiNIQ25-SkETX1Xxn0Zh - Aula 13 */