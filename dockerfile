FROM php:7.4.4-apache
RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y \
        libzip-dev \
        zip \
        nano \
        curl \
        git 
        

RUN docker-php-ext-install \
    mysqli \
    pdo \
    pdo_mysql \
    # intl \
    zip 

RUN pecl install \
    zip-1.18.2 \
    protobuf \
    redis 

RUN docker-php-ext-enable \
    zip protobuf redis pdo pdo_mysql

RUN a2enmod rewrite


# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && ln -s $(composer config --global home) /root/composer
ENV PATH=$PATH:/root/composer/vendor/bin COMPOSER_ALLOW_SUPERUSER=1




# PHPunit
# RUN composer require phpunit/phpunit --dev
RUN curl https://phar.phpunit.de/phpunit.phar -L -o phpunit.phar
RUN chmod +x phpunit.phar
RUN mv phpunit.phar /usr/local/bin/phpunit

WORKDIR /var/www/html