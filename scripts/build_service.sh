#!/bin/bash
echo " _ rebuilding service"
echo "\$1 service name in docker-compose.yml"
docker-compose up -d --no-deps --build $1