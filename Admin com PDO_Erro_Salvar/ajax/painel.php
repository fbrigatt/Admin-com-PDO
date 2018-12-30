<?php

	$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
	
		switch($acao) {
			case 'form_cad':
			?>
				<!-- FORMULÁRIO DO BOOTSTRAP -->

					<!-- DIV PARA MENSAGENS DE ERRO OU SUCESSO -->				
					<div class = "retorno"></div>
				
					<form action = "" name = "form_cad" method = "post">

					  <!-- CAMPO NOME -->
					  <div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" class="form-control" name="nome" placeholder="Digite o Nome">
					  </div>

					  <div class="form-group">
						<label for="login">Login</label>
						<input type="text" class="form-control" name="login" placeholder="Digite o Login">
					  </div>
					  
					  <div class="form-group">
						<label for="email">E-Mail</label>
						<input type="email" class="form-control" name="email" placeholder="Digite o E-Mail">
					  </div>

					  <div class="form-group">
						<label for="senha">Senha</label>
						<input type="password" class="form-control" name="senha" placeholder="Digite uma Senha">
					  </div>
					  
					  <div class="form-group">
						<label for="nivel">Nível</label>
						<select class = "form-control" >
							<option value = "" > Escolha uma Opção </option>
							<option value = "1" > Administrador </option>
							<option value = "2" > Usuário </option>
						</select>	
					  </div>
					  
						<p class = "pull-right" >
							<button type="submit" class="btn btn-primary">Cadastrar</button>
						</p>

					</form>
			
				<!-- FIM FORMULÁRIO DO BOOTSTRAP -->
			
			<?php
				
				break;
			default:
				echo 'Nada;';
				break;
		};