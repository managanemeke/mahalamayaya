#!/bin/bash
#
realuser="${SUDO_USER:-${USER}}"
#
docker-compose down
#
chown -R $realuser:$realuser yaya/migrations
chown -R $realuser:$realuser yaya/models
chown -R $realuser:$realuser yaya/controllers
