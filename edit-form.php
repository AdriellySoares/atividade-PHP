<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de edição</title>
</head>
<body>
    <div class="d-flex flex column align-items-center">
        <h1>Editar produtos</h1>
        <a href="./index.php"><button class="btn btn-success">Voltar a Pagina Inicial</button></a>
    </div>
    <form method="POST" action="put.php?{$produto['produtosid']}">
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome do Produto</label>
            <div class="col-sm-10">
                <input type="text" pattern="(?=.*[A-Z])(?=.*[a-z]){3,}" class="form-control" name="nome" id="nome" placeholder="Nome do Produto" value="<?php echo $produto['nome']?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
            <div class="col-sm-10">
                <input name="categoria" type="text" pattern="(?=.*[A-Z])(?=.*[a-z]){2,}" class="form-control" id="categoria" placeholder="categoria" value="<?php echo $produto['categoria']?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="valor" class="col-sm-2 col-form-label">Valor(R$)</label>
            <div class="col-sm-10">
                <input name="valor" type="number" pattern="(.[0-9]){3,}" class="form-control" id="valor" placeholder="Valor" value="<?php echo $produto['valor']?>">
            </div>
        </div>
        <div>
            <button class="btn btn-primary" name="editar" id="editar" type="submit">Editar</button>
        </div>
    </form>
</body>
</html>