# Histórico de desenvolvimento

## Escolha do framework

Optei por Laravel tendo em vista que ele fornece uma gama mais ampla de recursos e uma experiência de desenvolvimento mais completa, facilitando em um futuro crescimento do projeto.

## Escolha do ambiente de desenvolvimento

Como nos requisitos do projeto havia dockerização, optei por fazer o ambiente de desenvolvimento através de um docker compose composto pelo laravel, nginx, mysql e redis.

Usei como base o setup docker laravel do Carlos Ferreira:

<https://github.com/especializati/setup-docker-laravel>

- BACK: API REST;

- FRONT: Vue 3 - composition api;

## Ajuste no WSL2 e execução da aplicação

Como usei wsl2, antes de seguir os passos iniciais para executar o projeto com docker, tive que dar permissão pra pasta do projeto no wsl da seguinte forma:

No terminal do wsl executei o comando:

```
chmod -R 775 /home/wmikael/workspaces/teste-maximize
```

## Desenvolvimento API

- Deixei todas as variaveis em ingles seguindo as boas praticas de desenvolvimento em laravel.

- Comecei a criação da API com o model, usei o artisan pra criar o modelo com a migration com o comando:

```
php artisan make:model Article -m
```

- Implementei o modelo e o migration com base nos requisitos do sistema.

- Implementei as rotas em routes/api.php

- Então fui pra implementação do controller. Decidi fazer o controller e os services separados.

- Implementei o CRUD de Article utilizando o ORM Eloquent.

- Testei os endpoints no Postman e então fui pro desenvolvimento do front

### Desenvolvimento do Front

- Criei o projeto vue 3 com vite e apaguei arquivos desnecessarios.

- Em seguida exportei a logo do figma em png e importei no projeto.

- Resetei o css.

- Criei os componentes footer e header.

- Configurei as rotas e criei as views AppInicio e AppMateria, onde a AppInicio lista os cards de materias. Quando o usuario clica em algum card de materia, ele é redirecionado para AppMateria com os dados da materia desejada.

- Em AppInicio a pagina é carregada com uma lista paginada de materias.

- Em AppMateria é feito uma requisição com base no id obtido em AppInicio e entao exibe todas as informacoes da materia escolhida.

### Problemas no desenvolvimento

Tive problemas ao tentar criar um docker-compose.yml na pasta externa do projeto de forma a executar somente um docker compose up -d e subir o projeto todo. Consegui rodar dessa forma no meu pc, mas ao tentar clonar o repositorio novamente e rodar, não funcionou. Aparentemente é algum erro nas pastas de configuração do dockerfile, nginx e docker-compose.

### Proximas atualizações:

- Ajustar docker do front;
- Acrescentar views que usem outros metodos da API como update, store e delete;
- Configurar autenticação para os métodos update, store e delete;
- Melhorar design do front;


