#!/bin/bash
docker-compose exec app vendor/bin/phpstan analyse app   
docker-compose exec app vendor/bin/phpstan analyse bootstrap
docker-compose exec app vendor/bin/phpstan analyse config
docker-compose exec app php artisan test