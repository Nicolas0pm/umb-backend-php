FROM php:8.2-apache

# Instalar extensiones necesarias para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar mod_rewrite (por si usas rutas limpias)
RUN a2enmod rewrite

# Copiar tu API al contenedor
COPY ./api /var/www/html/

# Dar permisos opcionales
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
