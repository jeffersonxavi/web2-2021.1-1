<h1>Pagina de edição de Fornecedor</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <form action="../update/{{$fornecedor->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nome Fornecedor</label>
        <input type="text" name="nome" id="nome" value="{{$fornecedor->nome}}">
        <p><label for="">Endereço do Fornecedor</label>
        <input type="text" name="endereco" id="endereco" value="{{$fornecedor->endereco}}">
        <p><label for="">E-mail do Fornecedor</label>
        <input type="text" name="email" id="email" value="{{$fornecedor->email}}">
        <p><input type="submit" value="salvar">    
    </form>
</body>
</html>