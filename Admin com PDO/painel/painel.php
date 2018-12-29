<?php

	ob_start();
	session_start();

	require '../funcoes/banco/conexao.php';
	require '../funcoes/login/login.php';

	logado('administrador');
	
	//echo $_SESSION['administrador'] -> administrador_nome;
	
	if (isset($_GET['logout']) && $_GET['logout'] == 'true' ) :
		session_destroy();
		header("Location: ../index.php");
	endif;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin com PDO</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/estilos.css" rel="stylesheet" media="screen">

    </head>
    <body>

        <nav class="navbar navbar-default" role="navigation">
            <div class="container">


                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">HOME ADMIN</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Cadastrar</a></li>
                            </ul>
                        </li>
                    </ul>

                    <p class="pull-right logout">
                    	<!-- Mostra Usuário Logado -->
						<!-- Bem Vindo: SEU NOME &nbsp -->
						Bem Vindo: <?php echo $_SESSION['administrador'] -> administrador_nome; ?> &nbsp
                        <a href="?logout=true" class="btn btn-danger">Sair</a>
                    </p>

                </div><!-- /.navbar-collapse -->
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2 class="linha">HOME</h2>
                    <div class="box">
                        
                         <div class="box-title">Administradores</div>
                                <div class="box-content nopadding">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>E-mail</th>
                                                <th>Login</th>
                                                <th>Nivel</th>
                                                <th width="200">Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>SEU NOME</td>
                                                <td>email@email.com</td>
                                                <td>LOGIN</td>
                                                <td>admn</td>
                                                <td>
                                                	<a href="#" class="btn btn-warning">Editar</a>
                                                	<a href="#" class="btn btn-danger">Excluir</a>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>@jdoe</td>
                                                <td>admn</td>
                                                <td>
                                                	<a href="#" class="btn btn-warning">Editar</a>
                                                	<a href="#" class="btn btn-danger">Excluir</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Matt</td>
                                                <td>Armon</td>
                                                <td>@marmon</td>
                                                <td>admn</td>
                                                <td>
                                                	<a href="#" class="btn btn-warning">Editar</a>
                                                	<a href="#" class="btn btn-danger">Excluir</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jane</td>
                                                <td>Kowalsky</td>
                                                <td>@jane-kow</td>
                                                <td>admn</td>
                                                <td>
                                                	<a href="#" class="btn btn-warning">Editar</a>
                                                	<a href="#" class="btn btn-danger">Excluir</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tim</td>
                                                <td>Pacey</td>
                                                <td>@t-pac</td>
                                                <td>admn</td>
                                                <td>
                                                	<a href="#" class="btn btn-warning">Editar</a>
                                                	<a href="#" class="btn btn-danger">Excluir</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Steve</td>
                                                <td>Rovinsky</td>
                                                <td>@steve-sky</td>
                                                <td>admn</td>
                                                <td>
                                                	<a href="#" class="btn btn-warning">Editar</a>
                                                	<a href="#" class="btn btn-danger">Excluir</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        

                    </div>
                </div>

                <div class="col-lg-3">
                    <h2 class="linha">Menu</h2>
                    <div class="bloco">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge">14</span>
                                Registros
                            </li>
                        </ul>
                        
                        <div class="list-group">
						  <a href="#" class="list-group-item active">Administrador</a>
						  <a href="#" class="list-group-item" data-toggle="modal" data-target="#modalExemplo3" >Cadastrar</a>
						</div>
                        
                    </div>

                </div>

            </div>
			
			<!-- MODAL -->
				<div id="modalExemplo3" class="modal fade">
					<div class="modal-dialog modal-sm" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Titulo do meu Modal</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<p>Corpo do meu Modal!</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary">Salvar Alterações</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
							</div>
						</div>
					</div>
				</div>
			<!-- FIM MODAL -->
			
        </div> <!-- FIM DIV CONTAINER -->
		
        <!--<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script> -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/painel.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
	
    </body>
</html>
<?php
	ob_end_flush();
//	session_destroy();
?>