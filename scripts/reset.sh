#!/bin/bash
docker exec kraken-app php artisan migrate
docker exec kraken-app php artisan db:seed