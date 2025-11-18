# Imagen oficial de PHP con Apache
FROM php:8.2-apache

# Copiar SOLO la carpeta api al servidor web del contenedor
COPY api/ /var/www/html/

# Activar mod_rewrite (opcional pero recomendado)
RUN a2enmod rewrite
