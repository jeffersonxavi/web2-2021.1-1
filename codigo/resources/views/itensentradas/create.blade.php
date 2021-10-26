<h1>Pagina de Cadastro de Contato</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADICIONAR CONTATO</title>
</head>
<body>
    <form action="{{route('itensentradastore')}}" method="POST">
        @csrf
        <label for="precocompra">precocompra</label>
        <input type="text" name="precocompra" id="precocompra">
        <p><label for="valortotal">Valortotal</label>
        <input type="text" name="quantidade" id="quantidade">
        {{id_itensentrada}}
        {{id_produto}}
        <p><input type="hidden" name="id_itensentrada" value="{{$id_itensentrada}}">
        <p><input type="hidden" name="id_produto" value="{{$id_produto}}">    
        <p><input type="submit" value="cadastrar">    
    </form>
</body>
</html>