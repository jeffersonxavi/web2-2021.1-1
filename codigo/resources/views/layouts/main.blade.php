<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Indicator | EL Creative Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/projeto/codigo/public/css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title> @yield('titulo') </title>
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>SOCAPE</h1>
        </div>
        <div id="nav">
            <!-- Grey with black text -->
            <nav>
                <a href="#">Clientes</a>
                <a href="#">Produtos</a>
                <a href="#">Entradas</a>
                <a href="#">Vendas</a>
                <a href="http://localhost/projeto/codigo/public/clientes/index">Consultar</a>
                <div class="animation start-home"></div>
        </div>
        <div class="caixadepesquisa">
            <input class="textodepesquisa" type="text" placeholder="Pesquisar">
            <a class="botaodepesquisa" href="">
                <i class="fas fa-search"></i>
            </a>
        </div>
        </nav>
        <script src="script.js"></script>
        <div id="conteudo">
            @yield('conteudo')
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>