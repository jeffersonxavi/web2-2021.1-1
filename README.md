<h2 align="center">
  <img src="http://logonoid.com/images/laravel-logo.png" width="35">
  <p> Projeto 2</p>
</h2>
Projeto em Laravel inspirado no sistema desenvolvido na disciplina WEB1.



### Como rodar o projeto: #

- Clone a branch final deste repositório 
```
    git clone -b ProjetoII-backend git@github.com:jeffersonxavi/web2-2021.1-1.git
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
- Fornecedores 
  ![image](https://user-images.githubusercontent.com/81382639/154548120-4a648662-b4a3-485e-8130-a4d1b417c65a.png)
- Produto 
- ![image](https://user-images.githubusercontent.com/81382639/154548941-5835e869-a22e-42c7-b834-299724b65e61.png)


## Tecnologias
* <a href="https://laravel.com//" target="_blank">Laravel</a>
* <a href="https://docker.com//" target="_blank">Docker</a>
