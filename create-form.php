<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadastro</title>
</head>
<body>
    <h1>Cadastro de produtos</h1>
    <a href="./index.php"><button class="btn btn-success">Voltar a Pagina Inicial</button></a>
    <form action="post.php" method="POST">
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome do Produto</label>
            <div class="col-sm-10">
                <input type="text" pattern="(?=.*[A-Z])(?=.*[a-z]){3,}" class="form-control-plaintext" name="nome" id="nome" placeholder="Nome do Produto">
            </div>
        </div>
        <div class="form-group row">
            <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
            <div class="col-sm-10">
                <input name="categoria" type="text" pattern="(?=.*[A-Z])(?=.*[a-z]){2,}" class="form-control-plaintext" id="categoria" placeholder="Categoria">
            </div>
        </div>
        <div class="form-group row">
            <label for="valor" class="col-sm-2 col-form-label">Valor(R$)</label>
            <div class="col-sm-10">
                <input name="valor" type="text" pattern="([0-9]){2,}" class="form-control-plaintext" id="valor" placeholder="Valor">
            </div>
        </div>
        <div>
            <button class="btn btn-primary" name="cadastrar" id="cadastrar" type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>