FROM php:8.0.8-fpm-alpine3.14

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
COPY ./php.ini $PHP_INI_DIR/php.ini

RUN chmod uga+x /usr/local/bin/install-php-extensions \
    && sync \
    && install-php-extensions \
    pdo_mysql \
    gd \
    zip \
    bcmath \
    sockets \
    && apk update \
    && apk add --no-cache \
    git=2.32.0-r0 \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --version=2.2.3 \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer \
    && mkdir -p /app \
    && rm -rf /usr/local/bin/install-php-extensions
