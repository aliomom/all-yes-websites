FROM wordpress:5.2.4-php7.2-apache

# replace stock plugins/themes with our own
RUN rm -rf /var/www/html/wp-content/{plugins,themes}
COPY --chown=www-data:www-data ./src /var/www/html/wp-content
