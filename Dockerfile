FROM php:7.4-apache
RUN apt-get update && apt-get install -y openssl libssl-dev
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install bcmath
COPY . /var/www/html/
WORKDIR /var/www/html/
EXPOSE 80
