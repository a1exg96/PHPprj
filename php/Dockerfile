FROM php:7.2.7-fpm-alpine3.7

RUN docker-php-ext-install pdo pdo_mysql
# for mysqli if you want
#RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN apk update; \
    apk upgrade; \
