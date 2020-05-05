# Base Image
FROM php:7.4.3-fpm-alpine3.11

# Update and Installation
RUN apk update && \
    apk add git

RUN set -x && \
  apk add --no-cache icu-libs && \
  apk add --no-cache --virtual build-dependencies icu-dev && \
  NPROC=$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) && \
  docker-php-ext-install -j${NPROC} intl && \
  docker-php-ext-install -j${NPROC} pdo_mysql && \
  apk del --no-cache --purge build-dependencies && \
  rm -rf /tmp/pear

RUN set -x && \
  deluser www-data && \
  addgroup -g 50 -S www-data && \
  adduser -u 1000 -D -S -G www-data www-data

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e0012edf3e80b6978849f5eff0d4b4e4c79ff1609dd1e613307e16318854d24ae64f26d17af3ef0bf7cfb710ca74755a') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
