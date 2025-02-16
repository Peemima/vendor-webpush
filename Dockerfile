FROM php:8.0-apache

# Update package list and install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zlib1g-dev \
    openssl

# Install additional PHP extensions if needed
RUN docker-php-ext-install zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Copy the shell script
COPY install_composer.sh /usr/local/bin/install_composer.sh

# Make the script executable
RUN chmod +x /usr/local/bin/install_composer.sh

# Execute the shell script to install Composer dependencies
RUN /usr/local/bin/install_composer.sh
