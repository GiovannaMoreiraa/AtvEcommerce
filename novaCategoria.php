<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        div{
            background-color: brown;
            margin: 0 auto;
            padding: 20px;
            border-radius:5px ;

        }

        input{
            background-color: black;
            color:white;
            border-radius:5px ;
        }

        h1{
                color:white;
            }
    </style>
</head>
<body>
    <h1>Nova Categoria</h1>
    <form action="controller/categoria-add.php" method = "GET">
        <input type="text" name = "descricao" placeholder = "Nome da Marca">
        <button>Enviar</button>
    </form>
</body>
</html>