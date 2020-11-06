#!/bin/bash
echo "_ reseting data in storage"
docker-compose exec app php artisan migrate:reset
echo "_ migrate data to storage"
docker-compose exec app php artisan migrate
echo "_ seed data to storage"
docker-compose exec app php artisan db:seed