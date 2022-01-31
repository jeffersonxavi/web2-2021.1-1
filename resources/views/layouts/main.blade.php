<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS only -->
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <title> @yield('titulo') </title>
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>SISTEMA DE VENDAS</h1>
        </div>
        <div id="nav">
            <!-- Grey with black text -->
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('produto.index')}}">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('entrada.index')}}">Entradas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('venda.index')}}">Vendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('fornecedor.index')}}">Fornecedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cliente.index')}}">Clientes</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="conteudo">
            @yield('conteudo')
            <p>
                <span style="background: #1abc9c; border-radius:7px; padding:7px">
                    SEJA BEM VINDO A PAGINA INICIAL</span>.
            </p>
        </div>
        <div id="footer">
            copyrightjefferson@WEB
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>