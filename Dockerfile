FROM php:5.6-apache
COPY public/ /var/www/html/
CMD touch /var/www/html/config.php