# Usar imagen oficial de PHP con Apache
FROM php:8.2-apache

# Copiar tu carpeta api al servidor Apache
COPY api/ /var/www/html/

# Instalar extensiones PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar mod_rewrite
RUN a2enmod rewrite
