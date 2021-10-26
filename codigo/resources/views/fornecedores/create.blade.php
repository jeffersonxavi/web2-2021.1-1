<h1>Pagina de Cadastro de Fornecedor</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADICIONAR FORNECEDOR</title>
</head>
<body>
    <form action="store" method="POST">
        @csrf
        <label for="">Nome Fornecedor</label>
        <input type="text" name="nome" id="nome">
        <p><label for="">Endereço do Fornecedor</label>
        <input type="text" name="endereco" id="endereco">
        <p><label for="">E-mail do Fornecedor</label>
        <input type="text" name="email" id="email">
        {{id_fornecedor}}
        <p><input type="hidden" name="id_fornecedor" value="{{$id_fornecedor}}">    
        <p><input type="submit" value="cadastrar">
    </form>
</body>
</html>