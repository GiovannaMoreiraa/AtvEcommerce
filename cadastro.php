<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <header>
      <div class="center">
        <h1>Programação Web II - Cadastro de Clientes - By Anderson Macedo</h1>
        <a href="index.php" target="_blank">Catálogo</a>
      </div>
    </header>
    <section id="cadastro">
        <div class="center">
          <h1>Cadastro de Clientes</h1>
        </div>

        <form>
            <fieldset>
                <div>
                    <!-- Nome-->
                    <label>Nome Completo</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome"></input><br>
                </div>

                <div>
                     <!-- Login-->
                     <label>Login</label>
                    <input type="text" name="login" id="login" placeholder="Login"></input><br>
                </div>

                <div>
                     <!-- Senha-->
                     <label>Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Senha"></input>
                </div>

                <div>
                     <!-- Nascimento-->
                     <label>Data de Nascimento</label>
                    <input type="text" name="nascimento" id="nascimento" placeholder="Data de Nascimento"></input>
                </div>
                
                <div>
                     <!-- Endereço-->
                     <label>Endereço</label>
                    <input type="text" name="endereco" id="endereco" placeholder="Endereço"></input>
                </div>

                <div>
                     <!-- Sexo-->
                     <label>Sexo</label>
                     <label>
                        <input type="radio" name="sexo" value="1">Masculino</input>
                     </label>
                     <label>
                        <input type="radio" name="sexo" value="2">Feminino</input>
                     </label>
                     <label>
                        <input type="radio" name="sexo" value="3">Outro</input>
                     </label>                  
                </div>

                <div>
                     <!-- CPF-->
                     <label>CPF</label>
                    <input type="text" name="cpf" id="cpf" placeholder="CPF"></input>
                </div>

                <div>
                     <!-- RG-->
                     <label>RG</label>
                    <input type="text" name="rg" id="rg" placeholder="RG"></input>
                </div>

                <div>
                     <!-- Telefone-->
                     <label>Telefone</label>
                    <input type="text" name="telefone" id="telefone" placeholder="Telefone"></input>
                </div>

                <div>
                     <!-- Celular-->
                     <label>Celular</label>
                    <input type="text" name="celular" id="celular" placeholder="Celular"></input>
                </div>
            </fieldset>
        </form>
    </section>

  </body>
</html>
