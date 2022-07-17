FROM php:7.4-fpm-alpine
RUN php -m && echo "============================================="

RUN apk --update --no-cache add autoconf g++ make && \
    docker-php-ext-install mysqli &&\
    pecl install -f xdebug && \
    docker-php-ext-enable xdebug && \
    apk del --purge autoconf g++ make \

