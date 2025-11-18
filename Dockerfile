FROM php:8.2-apache

# Instalar extensión PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copiar el backend
COPY api/ /var/www/html/

RUN a2enmod rewrite
