<h1>Pagina de Cadastro de entrada</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADICIONAR entrada</title>
</head>
<body>
    <form action="store" method="POST">
        @csrf
        <label for="">Data entrada</label>
        <input type="text" name="data" id="data">
        <p><label for="">Valor da entrada</label>
        <input type="text" name="valortotal" id="valortotal">
        <p><input type="submit" value="cadastrar">    
    </form>
</body>
</html>