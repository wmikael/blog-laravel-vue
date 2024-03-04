#!/bin/bash

# Iniciar os containers Docker
docker-compose up -d

# Instalar as dependências do Composer
docker-compose exec app bash -c "composer install"

# Gerar a chave do aplicativo Laravel
docker-compose exec app bash -c "php artisan key:generate"

# Executar as migrações do banco de dados
docker-compose exec app bash -c "php artisan migrate"

# Executar o seeder específico (ArticleSeeder)
docker-compose exec app bash -c "php artisan db:seed --class=ArticleSeeder"
