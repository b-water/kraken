#!/bin/bash
echo "_ setup environment for app to run"
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
docker-compose exec app npm install && npm run dev