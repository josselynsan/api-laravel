FROM php:7.2-apache
RUN apt-get update && apt-get install -y
&& docker-php-ext-install mysqli pdo pdo_mysql