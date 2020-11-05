#!/bin/bash
docker-compose build app
docker-compose up -d
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
echo "_ wait for db service starting"
sleep 10
docker-compose exec app php artisan migrate
docker-compose exec app npm install && npm run dev