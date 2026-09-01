FROM php:8.3-apache

RUN apt-get update \
    && apt-get install -y git git-lfs \
    && docker-php-ext-install pdo_mysql mysqli \
    && rm -rf /var/lib/apt/lists/*

RUN printf '<Directory /var/www/html>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n' > /etc/apache2/conf-available/frencken-directory-listing.conf \
    && a2enconf frencken-directory-listing

RUN chown -R www-data:www-data /var/www/html