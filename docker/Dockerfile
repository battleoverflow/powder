FROM php:8.1-apache

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Install packages
RUN apt-get update && \
    apt-get install \
    libzip-dev \
    wget \
    git \
    unzip \
    -y --no-install-recommends

# Install PHP Extensions
RUN docker-php-ext-install zip pdo_mysql
RUN pecl install -o -f xdebug-3.1.5 && docker-php-ext-enable xdebug

# Copy necessary files
COPY ./composer.sh ./
COPY ./php.ini /usr/local/etc/php/

# Purge everything
RUN apt-get purge -y g++ \
    && apt-get autoremove -y \
    && rm -r /var/lib/apt/lists/* \
    && rm -rf /tmp/*

# Install Composer
RUN sh ./composer.sh && rm ./composer.sh

WORKDIR /var/www

RUN chown -R www-data:www-data /var/www

# Run migrations
RUN php migrations.php

# Start Apache
CMD ["apache2-foreground"]
