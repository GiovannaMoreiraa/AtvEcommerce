<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Novo Cliente</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <header>
      <div class="center">
        <h1>Programação Web II - Cadastro de Clientes - By Anderson Macedo</h1>
        <a href="index.php" target="_blank">Início</a>
      </div>
    </header>

    <div class="container my-5">
      <div class="card" >
        <h5 class="card-header" style="text-align:center">Novo Cliente</h5>
        <div class="card-body">
          <form action="">

          <h5 class="card-title" style="text-align:center; margin-bottom:30px">Informações de Login</h5>
          
          
          <div class="row">

          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Nome Completo:</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Nome">
          </div>

          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Login:</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="login" name="login" placeholder="Digite o Login">
          </div>

          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Email:</label>
          </div>
          <div class="col-md-6">
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite o Email">
          </div>

          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Senha:</label>
          </div>
          <div class="col-md-6">
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a senha">
          </div>

          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Nascimento:</label>
          </div>
          <div class="col-md-6">
            <input type="date" class="form-control" id="nasc" name="nasc" placeholder="DD/MM/AAAA">
          </div>

          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">CPF:</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF">
          </div>

          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Endereço:</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o Endereço">
          </div>

          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">RG:</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="rg" name="rg" placeholder="Digite o RG">
          </div>

          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Celular:</label>
          </div>
          <div class="col-md-6">
            <input type="tel" class="form-control" id="celular" name="celular" placeholder="Digite o Celular">
          </div>

          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Telefone:</label>
          </div>
          <div class="col-md-6">
            <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Digite o Telefone">
          </div>

          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Sexo:</label>
          </div>
          <div class="col-md-6">
          <select class="form-select" aria-label="Default select example">
            <option selected disabled>Selecione o sexo</option>
            <option value="1">Masculino</option>
            <option value="2">Feminino</option>
            <option value="3">Outro</option>
          </select>
          </div>

          
          <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4" style="display: grid;">
                <input href="model/Cliente.class.php?id='.$prod->IDPROD.'" class="btn btn-secondary" type="submit" >
              </div>
              <div class="col-md-4"></div>
            </div>
          </form>
        </div>
      </div>
    </div>

    

    

    




   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>
