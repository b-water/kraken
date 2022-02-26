#!/bin/bash
echo "_ setup environment for app to run"
docker-compose exec app cp .env.example .env
docker-compose exec app composer install
docker-compose exec app composer self-update --2
docker-compose exec app php artisan key:generate
docker-compose exec app npm install
docker-compose exec app npm run dev