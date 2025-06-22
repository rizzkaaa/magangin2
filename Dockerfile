FROM php:8.2-apache

# Install ekstensi mysqli
RUN docker-php-ext-install mysqli

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
