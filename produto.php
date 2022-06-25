<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Novo Produto</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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

    <div class="container my-5">
      <div class="card" >
        <h5 class="card-header" style="text-align:center">Novo Cliente</h5>
        <div class="card-body">
          <h5 class="card-title" style="text-align:center; margin-bottom:30px">Informações de Login</h5>
          
          
          <div class="row">

          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Nome do Produto:</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="nomeProd" name="nomeProd" placeholder="Digite o Nome do Produto">
          </div>

          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Descrição:</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Breve descrição do Produto">
          </div>

          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Estoque:</label>
          </div>
          <div class="col-md-6">
            <input type="number" class="form-control" id="estoque" name="estoque" placeholder="Quantidade no estoque">
          </div>

          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Preço:</label>
          </div>
          <div class="col-md-6">
            <input type="number" class="form-control" id="preco" name="preco" placeholder="Preço do produto">
          </div>

          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Marca:</label>
          </div>
          <div class="col-md-6" style=" display: flex; justify-content: center;">
            <select class="form-select" aria-label="Default select example"  >
              <option selected value="exemplo" disabled>Selecione a marca</option>
              <!-- fazer um foreach pegando as marcas do banco-->
              
            </select>
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalMarca">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            </button>
            
          </div>


          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Categoria:</label>
          </div>
          <div class="col-md-6" style=" display: flex; justify-content: center;">
            <select class="form-select" aria-label="Default select example">
              <option selected value="exemplo" disabled>Selecione a categoria</option>
              <!-- fazer um foreach pegando as categorias do banco-->
              
            </select>
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalCategoria">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            </button>
          </div>

        </div>
      </div>
      <input href="model/Cliente.class.php?id='.$prod->IDPROD.'" class="btn btn-outline-secondary" type="submit" >
    </div>

    <!-- Modal Marca -->
    <div class="modal fade" id="modalMarca" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalMarcaLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Cadastrar Nova Marca</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          
            <div class="row">
              <div class="col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Nome da Marca:</label>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="nomeProd" name="nomeProd" placeholder="Digite o Nome da Marca">
              </div>
            </div> 

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </div>
    </div>

        <!-- Modal Categoria -->
        <div class="modal fade" id="modalCategoria" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalCategoriaLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Cadastrar Nova Categoria</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                  <label for="exampleFormControlInput1" class="form-label">Nome da Categoria:</label>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="nomeProd" name="nomeProd" placeholder="Digite o Nome da Marca">
                </div>
              </div>      
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </div>
    </div>

    

    

    




   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>
