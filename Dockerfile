FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
git \
zip \
unzip \
libzip-dev \
libpng-dev \
libonig-dev \
&& docker-php-ext-install pdo_mysql mbstring zip gd

COPY . /var/www/html

WORKDIR /var/www/html

RUN chmod -R 775 storage bootstrap/cache

CMD ["php-fpm"]