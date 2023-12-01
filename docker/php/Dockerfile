FROM php:7.4-fpm
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable mysqli

RUN apt update && apt install -y libicu-dev && rm -rf /var/lib/apt/lists/*
RUN apt update && apt install -y libzip-dev
RUN apt update && apt install -y libpng-dev
RUN apt update && apt install -y libxml2-dev

RUN docker-php-ext-install intl
RUN docker-php-ext-enable intl

RUN docker-php-ext-install zip
RUN docker-php-ext-enable zip

RUN docker-php-ext-install gd
RUN docker-php-ext-enable gd

RUN docker-php-ext-install xmlrpc
RUN docker-php-ext-enable xmlrpc

RUN docker-php-ext-install soap
RUN docker-php-ext-enable soap

RUN docker-php-ext-install exif
RUN docker-php-ext-enable exif

RUN docker-php-ext-install exif
RUN docker-php-ext-enable exif
