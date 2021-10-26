<h1>Pagina de Cadastro de Produto</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADICIONAR PRODUTO</title>
</head>
<body>
    <form action="{{route('produtosstore')}}" method="POST">
        @csrf
        <label for="">Descrição</label>
        <input type="text" name="descricao" id="descricao">
        <label for="">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
        <label for="">Valor</label>
        <input type="text" name="valor" id="valor">
        <p><input type="submit" value="cadastrar">    
    </form>
</body>
</html>