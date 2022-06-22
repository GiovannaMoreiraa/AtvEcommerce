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
      <div>
        <h1>Programação Web II - Pedido de compra - By Anderson Macedo</h1>
        <a class="botao-navegacao" style="margin-left:10px; margin-right: 10px;" href="carrinho.php" target="_blank">Carrinho</a>
        <a style="margin-left:10px; margin-right: 10px;" href="cadastro.php" target="_blank">Cadastrar Cliente</a>
        <a style="margin-left:10px; margin-right: 10px;" href="produto.php" target="_blank">Cadastrar Produto</a>
      </div>
    </header>
    <section id="produtos">
        <div class="center">
          
          <?php 
          // die()
          require_once('controller/produtos-busca.php'); ?>
        </div>
    </section>

  </body>
</html>
