<h1>Pagina de Cadastro de Clientes</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store" method="POST">
        @csrf
        <label for="">Nome Cliente</label>
        <input type="text" name="nome" id="nome">
        <label for="">Endereço do Cliente</label>
        <input type="text" name="endereco" id="endereco">
        <label for="">Debito do Cliente</label>
        <input type="text" name="debito" id="debito">
        <input type="submit" value="cadastrar">    
    </form>
</body>
</html>