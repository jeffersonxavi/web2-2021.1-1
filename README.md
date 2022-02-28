<h2 align="center">
  <img src="http://logonoid.com/images/laravel-logo.png" width="35">
  <p> Projeto 1</p>
</h2>
Projeto em Laravel (Sistema de Vendas)

Link do projeto hospedado: <a href="http://sistemavendaweb.herokuapp.com/produtos/index" target="_blank">Aqui</a>


### Como rodar o projeto: #

- Clone a branch final deste repositório 
```
    git clone -b Projeto1-2unidade-Entrega2 git@github.com:jeffersonxavi/web2-2021.1-1.git
```

- Instale o composer
```
  composer install
```

- Edite o arquivo .env e coloque os dados da sua conexão com o banco de dados
```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=db
    DB_USERNAME=user
    DB_PASSWORD=pass
```

- Faça a migração do banco de dados
```
    php artisan migrate
```

### Telas do Sistema
- Clientes 
  ![image](https://user-images.githubusercontent.com/81382639/155907529-eb555165-d559-4066-947d-cc281c241bb9.png)
- Produtos
- ![image](https://user-images.githubusercontent.com/81382639/155907603-a566c55c-7e5f-4a69-a698-400a2ab25c3b.png)



## Tecnologias
* <a href="https://laravel.com//" target="_blank">Laravel</a>
* <a href="https://docker.com//" target="_blank">Docker</a>
