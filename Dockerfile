FROM php:8.2-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache rewrite module
RUN a2enmod rewrite

# Optional: Copy custom php.ini
COPY config/php.ini /usr/local/etc/php/

# Set working directory
WORKDIR /var/www/html
