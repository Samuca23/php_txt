<?php

namespace view\ViewManutencaoProduto;

/**
 * View do cadastro de Produto
 * @author Samuel Chiodini 
 * @since 31/03/2022
 */
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="">
    <title>Produto</title>
</head>
<body>
    <div>
        <form action="?acao=cadastrar" method="POST">
            <label for="Produto">Produto</label>
            <input id="Produto" name="produto_nome" type="text">
    
            <label for="Valor">Valor</label>
            <input id="Valor" name="produto_valor" type="numeric">
    
            <label for="Quantidade">Quantidade</label>
            <input id="Quantidade" name="produto_quantidade" type="numeric">

            <button class="btn btn-success">Cadastrar</button>
        </form>
    </div>
</body>
</html>