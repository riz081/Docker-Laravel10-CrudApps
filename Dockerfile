FROM php:8.1.19-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql