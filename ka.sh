#!/bin/bash
#
call ./na.sh
#
rm -fr docker/mysql
mkdir docker/mysql
#
docker-compose up --build -d
#
docker-compose exec php /bin/bash
