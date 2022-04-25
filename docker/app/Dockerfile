FROM php:8.0.8-fpm-alpine3.14

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
COPY ./php.ini $PHP_INI_DIR/php.ini

RUN chmod uga+x /usr/local/bin/install-php-extensions \
    && sync \
    && install-php-extensions \
    gd \
    zip \
    bcmath \
    sockets \
    && apk update \
    && mkdir -p /app \
    && rm -rf /usr/local/bin/install-php-extensions
