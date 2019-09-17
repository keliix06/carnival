FROM php:7.2-fpm

LABEL maintainer="doyle@blueearth.net"

RUN apt-get update && apt-get install -y \
        libzip-dev \
        libmcrypt-dev \
        libpng-dev \
        zlib1g-dev \
        unzip \
        gnupg \
        supervisor \
        libpq-dev && \
    docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql && \
    docker-php-ext-install pdo pdo_pgsql pgsql pcntl

RUN curl -s https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

RUN curl -sL https://deb.nodesource.com/setup_8.x | bash - && \
    apt-get install -y nodejs build-essential

RUN npm install gulp-cli -g && npm install gulp -D

WORKDIR /var/www/carnival
