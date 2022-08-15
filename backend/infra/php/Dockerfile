FROM php:8.1-fpm-alpine
RUN apk --update --no-cache add git
RUN docker-php-ext-install pdo_mysql
WORKDIR /var/www
RUN curl -sS https://getcomposer.org/installer | php -- --filename=composer --install-dir=/bin
ENV PATH /root/.composer/vendor/bin:$PATH
CMD composer install ;  php-fpm
EXPOSE 9000