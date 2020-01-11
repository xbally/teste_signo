<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/cadastro.css"/>
    <link rel="stylesheet" type="text/css" href="css/datepicker/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/datepicker/datepicker.min.css"/>

    <script type="text/javascript" src="js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery/jquery.mask.js"></script>
    <script type="text/javascript" src="js/cadastro.js"></script>
    <script type="text/javascript" src="js/datepicker/datepicker.min.js"></script>
</head>
<body>
      <div class="container-cadastro">
            <div class="wrap-cadastro">
          			<form class="cadastro-form validate-form" method="POST" action="../controller/insert_client.php" >
                				<span class="contrato-form-title">
                					Cadastro
                				</span>


                            <div class="row">
															<div class="col-2">
                          				<div class="wrap-cadastro-form2" >
                          					<span class="label-cadastro">Nome</span>
																		<input class="inputCadastro" type="text" placeholder="Nome"  title="Preencha o campo nome" required  name="name">
                          					<span class="focus-inputCadastro"></span>
                                 </div>
															 </div>
															 	<div class="col-2">
                          				<div class="wrap-cadastro-form2">
                          					<span class="label-cadastro">Telefone</span>
                          					<input class="inputCadastro" type="text" name="telefone" placeholder="Telefone" title="Preencha o campo telefone" required>
                          					<span class="focus-inputCadastro"></span>
                                 </div>
																 </div>
                             </div>

                            <div class="row">
															<div class="col-2">
                          				<div class="wrap-cadastro-form2 validate-input" data-validate = "Email invalid" required>
                          					<span class="label-cadastro">Email</span>
                          					<input class="inputCadastro" type="text" name="email" placeholder="E-mail" required title="Preencha o campo email" >
                          					<span class="focus-inputCadastro"></span>
                                    </div>
															 </div>
															 <div class="col-2">
                                <div class="wrap-cadastro-form2 validate-input" data-validate="inseri a Senha" >
					                             <span class="label-cadastro">Senha</span>
                                        <input class="inputCadastro" name="senha"  type="password" placeholder="Senha" required title="Preencha o campo senha" >
                                  			<span class="focus-inputCadastro"></span>
                                    </div>
																  </div>
                            </div>

                            <div class="row">
															 		<div class="col-4">
                                      	<div class="wrap-cadastro-form2 validate-input" data-validate="Inseri data de nascimento"  >
                                      	<span class="label-cadastro">Data Nascimento</span><br>
                                      	<input type="date" name="dataNascimento" class="form-control" placeholder=" ">
                                    		<span class="focus-inputCadastro"></span>
                                      </div>
																	</div>

																	<div class="col-4">
                                    <div class="wrap-cadastro-form2 validate-input" data-validate="inseri o cep">
                            					<span class="label-cadastro">CEP</span>
                            					<input class="inputCadastro" type="text" name="cep"  placeholder="CEP">
                            					<span class="focus-inputCadastro"></span>
                                 		</div>
															 		</div>
																 <div class="col-4">
																   <div class="wrap-cadastro-form2 validate-input" data-validate="inseri o estado">
                                      <span class="label-cadastro">Estado</span>
                            					<input class="inputCadastro" type="text" name="estado" placeholder="ESTADO">
                                      <span class="focus-inputCadastro"></span>
																		</div>
																			</div>
                                     <div class="col-4">
                                     <div class="wrap-cadastro-form2 validate-input" data-validate="inseri a cidade">
                                       <span class="label-cadastro">Cidade</span>
                                       <input class="inputCadastro" type="text" name="cidade" placeholder="CIDADE">
                                       <span class="focus-inputCadastro"></span>
                                  </div>
																	</div>
                                </div>


            				<div class="container-cadastro-form-btn">
            					<div class="wrap-cadastro-form-btn">
            						<div class="cadastro-form-bgbtn"></div>
            						<button class="cadastro-form-btn">
                          <a type="submit">
            							<span>
          								Submit
          								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
              						</span>
                      </a>
        						</button>
        					</div>
      				</div>
      			</form>
      		</div>
      	</div>
</div>
</body>
</html>
