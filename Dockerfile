FROM php:8.1-apache

COPY . /var/www/html
WORKDIR /var/www/html

RUN apt-get update && \
    apt-get install -y zlib1g-dev libzip-dev && \
    docker-php-ext-install zip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    composer install

EXPOSE 80

CMD ["apache2-foreground"]
