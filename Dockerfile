FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    default-mysql-client \
    libpq-dev \
    libzip-dev

# Instalar extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Copiar la API
COPY api/ /var/www/html/

RUN a2enmod rewrite
