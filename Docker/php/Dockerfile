FROM php:7.1-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libxml2-dev \
    libpng-dev

RUN docker-php-ext-install pdo pdo_mysql bcmath pcntl shmop soap

WORKDIR /var/www/html/m2l