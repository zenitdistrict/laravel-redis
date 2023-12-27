copy app/.env file from app/.env.example:
```
cp app/.env.example app/.env
```
fill database fields (DB_) in .env file

run docker containers:
```
docker-compose up -d
```
install laravel framework:
```
docker-compose run composer install
```
create database as named in DB_DATABASE

run migrations:
```
docker exec -ti "$(docker ps -aqf ancestor=nanoninja/php-fpm:8.1)" php artisan migrate
```
run url seeder:
```
docker exec -ti "$(docker ps -aqf ancestor=nanoninja/php-fpm:8.1)" php artisan db:seed
```
get items list:
```
http://localhost:8000/api/items
```
