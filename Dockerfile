FROM php:7.0-apache
COPY app/ /var/www/html
EXPOSE 80 443
