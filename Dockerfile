FROM php:5.6-apache
COPY public/ /var/www/html/
COPY .env /var/www/html/.env