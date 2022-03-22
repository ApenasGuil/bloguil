# Bloguil

> Projeto com finalidade de portifólio sobre blog, onde utilizo (ou ao menos tento utilizar) tudo que sei sobre Laravel e PHP

## Features

- View
  - [x] Registro de usuário
  - [ ] Login
  - [ ] Master blade (Bootstrap)
  - [ ] Dashboard (Admin)
  - [ ] Listagem de Usuários
  - [ ] Edição Usuário
  - [ ] Listagem de Posts
  - [ ] Edição de Post
  - [ ] Componente de erro
- Controller
  - [ ] Efetuar login
  - [ ] Logout
  - [ ] CRUD Usuário
    - [ ] Validator de inputs
    - [ ] Preferencias do usuário
  - [ ] CRUD Post
    - [ ] Validator de inputs
- Middleware
  - [ ] Auth
  - [ ] Guest
  - [ ] Session
- Migration
  - [ ] Tabela polimórfica
    - [ ] Imagem do usuário (CRUD)
    - [ ] Imagem do POST (CRUD)
    - [ ] Tags do POST (CRUD)
- Route
  - [ ] Redirecionamentos de rotas com Auth
- Features futuras
  - [ ] Tradução (Lang)
  - [ ] API

## Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas: [Laragon](https://laragon.org). 
Além disto é bom ter um editor para trabalhar com o código, como o [VSCode](https://code.visualstudio.com/)

## Clonando e setando o database

```bash
#### Todo este código é feito no terminal do Laragon ####

# Clone este repositório para a /www do Laragon
$ git clone <https://github.com/ApenasGuil/Bloguil>

-- Inicie o Laragon (Apache e Mysql)

# Acesse a pasta do projeto
$ cd laragon/www/bloguil

# Instale as dependências
$ composer install

# Copie o arquivo .env.example para a raiz
# (altere e crie o DB de mesmo nome)
$ copy .env.example .env

# Gere uma nova chave
$ php artisan key:generate

# Rode o banco
$ php artisan migrate

-- Acesse a URL pelo navegador de preferência <http://bloguil.test/home>
```

## Tecnologias

As seguintes ferramentas foram usadas na construção deste projeto:

- HTML, CSS
- [Boostrap](https://getbootstrap.com)
- [PHP](https://www.php.net)
- [Laravel](https://laravel.com)
- [Laragon](https://laragon.org)

## Autor
---

<a href="https://blog.rocketseat.com.br/author/thiago/">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/51236956?s=400&u=6ed8aca705bb79fe3d1466727d766a87da3a77a9&v=4" width="100px;" alt=""/>
 <br />
 <sub><b>Guilherme Moraes</b></sub></a> <a href="https://github.com/ApenasGuil" title="Twitter"></a>

[![Twitter Badge](https://img.shields.io/badge/-@apenasguil-1ca0f1?style=flat-square&labelColor=1ca0f1&logo=twitter&logoColor=white&link=https://twitter.com/apenasguil)](https://twitter.com/apenasguil) [![Linkedin Badge](https://img.shields.io/badge/-Guilherme-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/guilmoraes/)](https://www.linkedin.com/in/guilmoraes/) [![Gmail Badge](https://img.shields.io/badge/-guilhermemoraes.dev@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:guilhermemoraes.dev@gmail.com)](mailto:guilhermemoraes.dev@gmail.com)