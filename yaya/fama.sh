#!/bin/bash
#
location=http://localhost:80
#
yii migrate --interactive=0
#
sleep 5
#
curl --location --request POST $location'/workers' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "name":"Сфинкс"
}'
#
curl --location --request POST $location'/workers' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "name":"Слепой"
}'
#
curl --location --request POST $location'/workers' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "name":"Македонский"
}'
#
curl --location --request POST $location'/workers' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "name":"Лорд"
}'
#
curl --location --request POST $location'/providers' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "name":"asado",
    "is_active":0
}'
#
curl --location --request POST $location'/providers' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "name":"yobidoyobi",
    "is_active":0
}'
#
curl --location --request POST $location'/providers' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "name":"dodo-pizza",
    "is_active":0
}'
#
curl --location --request POST $location'/providers' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "name":"Ля Галетт",
    "is_active":1
}'
#
curl --location --request POST $location'/sections' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "name":"Пицца",
    "provider_id":3
}'
#
curl --location --request POST $location'/sections' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "name":"Комбо",
    "provider_id":3
}'
#
curl --location --request POST $location'/sections' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "name":"Ланч",
    "provider_id":4
}'
#
curl --location --request POST $location'/sections' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "name":"Супы",
    "provider_id":4
}'
#
curl --location --request POST $location'/meals' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "name":"Мясной микс 35см",
    "composition":"Пастрами из индейки, острая чоризо, пикантная пепперони, бекон, моцарелла, томатный соус.",
    "price":719,
    "section_id":1
}'
#
curl --location --request POST $location'/meals' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "name":"Сырная 35см",
    "composition":"Моцарелла, сыры чеддер и пармезан, соус альфредо.",
    "price":619,
    "section_id":1
}'
#
curl --location --request POST $location'/meals' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "name":"Солянка домашняя",
    "composition":"Бульон куриный, картофель, ветчина, колбаса полукопченая, шея свиная, огурцы консервированные, томатная паста, специи, приправа, зелень, маслины, лимон, сметана.",
    "price":135,
    "section_id":4
}'
#
curl --location --request POST $location'/meals' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "name":"Тефтели с томатным соусом с картофельным пюре",
    "composition":"Свинина, говядина, рис, лук репчатый, томатная паста, картофель, специи, бульон, масло сливочное.",
    "price":245,
    "section_id":3
}'
#
curl --location --request POST $location'/orders' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "date":"2022-08-27",
    "worker_id":1,
    "meal_id":3
}'
#
curl --location --request POST $location'/orders' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "date":"2022-08-27",
    "worker_id":1,
    "meal_id":4
}'
#
curl --location --request POST $location'/orders' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "date":"2022-08-29",
    "worker_id":2,
    "meal_id":3
}'
#
curl --location --request POST $location'/orders' \
--header 'Content-Type: application/json;charset=utf-8' \
--data-raw '{
    "date":"2022-08-29",
    "worker_id":1,
    "meal_id":3
}'
#
