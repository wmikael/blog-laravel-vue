# Histórico de desenvolvimento

## Escolha do framework

Optei por Laravel tendo em vista que ele fornece uma gama mais ampla de recursos e uma experiência de desenvolvimento mais completa, facilitando em um futuro crescimento do projeto.

## Escolha do ambiente de desenvolvimento

Como nos requisitos do projeto havia dockerização, optei por fazer o ambiente de desenvolvimento através de um docker compose composto pelo laravel, pelo nginx de servidor, pelo banco de dados mysql (posteriormente vou trocar para postgresql), e redis.

Usei como base o setup docker laravel Carlos Ferreira:

<https://github.com/especializati/setup-docker-laravel>

## Ajuste no WSL2 e execução da aplicação

Como usei wsl, antes de seguir os passos iniciais para executar o projeto com docker, tive que dar permissão pra pasta do projeto no wsl da seguinte forma:

No terminal do wsl executei o comando:

```
chmod -R 775 /home/wmikael/workspaces/teste-pratico/portal-noticias
```

Após isso e com os arquivos docker configurados, abri o projeto no vscode configurado para wsl e executei os seguintes comandos no terminal:

1. Executar o docker compose sem bloquear o terminal:

```
docker compose up -d
```

2. Acessar o bash do container da aplicação laravel

```
 docker compose exec app bash
```

3. Instalar as dependencias do projeto no container

```
composer install
```

4. Gerar a key do projeto laravel

```
php artisan key:generate
```

Em seguida basta acessar a url: <http://localhost:8989>


## Desenvolvimento

Deixei todas as variaveis em ingles seguindo as boas praticas de desenvolvimento em laravel.

Ao criar o CRUD de Article, fiz primeiramente com DTOs e depois descobri que o Laravel tem uma forma propria usando recursos do Eloquent como alternativa aos DTOs
### Criação da API

#### Entidades
