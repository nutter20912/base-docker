FROM php:7.4.5-fpm

RUN apt-get update && apt-get install -y \
  libfreetype6-dev \
  libjpeg62-turbo-dev \
  libpng12*-dev \
  && docker-php-ext-enable opcache \
  && docker-php-ext-install mysqli pdo_mysql \
  && docker-php-ext-install gd

WORKDIR /var/www