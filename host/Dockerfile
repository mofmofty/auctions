# Base Image
FROM php:7.4.3-apache

# Update and Installation
RUN apt-get update && \
  apt-get upgrade -y && \
  apt-get install -y --no-install-recommends nano libicu-dev && \
  apt-get install -y git && \
  rm -rf /var/lib/apt/lists/* && \
  docker-php-ext-install intl pdo pdo_mysql

# Working Directory
WORKDIR /projects

# Port
EXPOSE 80

# Command
CMD $PRJ_NAME/bin/cake server  -H 0.0.0.0 -p 80
