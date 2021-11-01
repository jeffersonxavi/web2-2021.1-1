<h1>Pagina de Cadastro de venda</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADICIONAR venda</title>
</head>
<body>
    <form action="{{route('venda.store')}}" method="POST">
        @csrf
        <label for="valortotal">valortotal</label>
        <input type="text" name="valortotal" id="valortotal">
        <p><label for="data">data</label>
        <input type="text" name="data" id="data">
        {{id_cliente}}
        <p><input type="hidden" name="id_cliente" value="{{$id_cliente}}">    
        <p><input type="submit" value="cadastrar">    
    </form>
</body>
</html>