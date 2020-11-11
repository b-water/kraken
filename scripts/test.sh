#!/bin/bash
docker-compose exec app vendor/bin/phpstan analyse app --memory-limit=52   
docker-compose exec app vendor/bin/phpstan analyse bootstrap --memory-limit=52
docker-compose exec app vendor/bin/phpstan analyse config --memory-limit=52
docker-compose exec app php artisan test