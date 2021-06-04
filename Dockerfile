FROM php:7.4.1-apache
RUN apt-get update && apt-get install -y \
        libpq-dev \
    && docker-php-ext-install pdo pdo_mysql
COPY .docker/apache/vhosts.conf /etc/apache2/sites-available/000-default.conf