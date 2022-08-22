#!/bin/bash
#
docker-compose up --build -d
#
docker-compose exec php /bin/bash -c '\
	chown -R www-data:www-data /app/web'
docker-compose exec php /bin/bash -c '\
	chown -R www-data:www-data /app/runtime'
docker-compose exec php /bin/bash -c '\
	chown -R www-data:www-data /app/vendor'
docker-compose exec php /bin/bash -c '\
	composer update'
#
echo ""
echo "ok..."
