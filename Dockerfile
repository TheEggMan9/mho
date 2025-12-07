# ---- Build Stage ----
FROM php:8.2-fpm AS build

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip bcmath

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN composer install --no-dev --optimize-autoloader

# ---- Production Stage ----
FROM php:8.2-fpm

WORKDIR /var/www/html

COPY --from=build /var/www/html /var/www/html

EXPOSE 8000

CMD php artisan key:generate --force && php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=$PORT
