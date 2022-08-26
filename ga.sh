#!/bin/bash
#
docker-compose down
#
rm -fr docker/mysql
mkdir docker/mysql
#
rm -fr yaya/migrations
mkdir yaya/migrations
#
docker-compose up --build -d
#
docker-compose exec php /bin/bash
