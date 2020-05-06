# Lesson6 mini-auctions

## Description
Development of mini-auction site

## Version
- Docker-compose 3
- Nginx 1.17.8
- PHP 7.4.3
- MySQL 8.0.19
- CakePHP 3.8.10
- phpMyAdmin 5.0.1

## URL
Mini-auction Site

http://localhost:8765/users/

CakePHP

http://localhost:8765/

phpMyAdmin

http://localhost:8080/index.php

## Usage
```
# Build
$ docker-compose build

# Create and launch container
$ docker-compose up -d

# List containers and check start docker
$ docker-compose ps

# install Composer
$ docker-compose exec phpfpm /bin/ash
$ cd /var/www/html/auctionapp
$ composer install
$ exit

# Applying Migrations
$ docker-compose exec phpfpm /bin/ash
$ cd /var/www/html/auctionapp
$ bin/cake migrations migrate

# Database Seeding
$ cd /var/www/html/auctionapp
$ bin/cake migrations seed
$ exit

# Open CakePHP in browser

# Stop container
$ docker-compose down
```
