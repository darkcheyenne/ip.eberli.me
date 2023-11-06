# Basic nginx dockerfile starting with Ubuntu 20.04
FROM php:8.2.12-apache
COPY index.php /var/www/html/
EXPOSE 80/tcp
