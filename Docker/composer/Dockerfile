FROM php:7.1-fpm

RUN apt-get update && apt-get install -y \
    git

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version
RUN echo 'memory_limit = -1' > /usr/local/etc/php/conf.d/memory.ini

WORKDIR /var/www/html/m2l