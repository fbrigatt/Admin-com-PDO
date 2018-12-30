$(document).ready(function(){
	// $('#janela').modal('show')
	
	var janela = $('#janela');
	var conteudo = $('.modal-body');
	
	janela.click(function(){
		//alert('clicou');
		
		$.post('../ajax/painel.php', {acao:'form_cad'}, function(retorno){
			
			$('#myModal').modal({
				backdrop: 'static'
			});
			
			conteudo.html(retorno);

		});
		
		$("#myModal").on("submit", 'form[name="form_cad"]', function(){
			//alert('Submeteu');
			
			var form = $(this);
			var botao = form.find(':button');
			
			$.ajax({
				url  : '../ajax/controller.php',
				type : 'POST',
				data : 'acao=cadastro&'+form.serialize(),
				beforeSend: function(){
					botao.attr('disabled', true);
					//$('.load').fadeIn('slow');
				},
				
				success: function(retorno){
					botao.attr('disabled', false);
					//$('.load').fadeOut('slow');
					if (retorno == 'cadastrou') {
						msg('Cadastrado com sucesso', 'sucesso');
					}else{
						msg('Erro ao Cadastrar', 'erro');
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
	
	
});