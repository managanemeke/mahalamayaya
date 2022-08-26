#!/bin/bash
#
docker-compose down
#
rm -fr docker/mysql
mkdir docker/mysql
#
docker-compose up --build -d
#
docker-compose exec php /bin/bash
