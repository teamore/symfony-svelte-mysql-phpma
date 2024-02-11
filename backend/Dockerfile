FROM php:8.2-apache

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Install any dependencies your application needs
RUN apt-get update && \
    apt-get install -y libpq-dev zip unzip nano && \
    docker-php-ext-install pdo pdo_mysql
RUN apt-get install -y npm

# Install Symfony CLI
RUN curl -sS https://get.symfony.com/cli/installer | bash
RUN mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Expose port 80 for the web server
EXPOSE 80

# Configure Apache

RUN a2enmod rewrite
RUN service apache2 restart

# Start Apache in the foreground
CMD composer install --no-interaction --optimize-autoloader;apache2-foreground