FROM php:apache

RUN a2enmod rewrite
COPY apache2.conf /etc/apache2/

COPY . /var/www/html/