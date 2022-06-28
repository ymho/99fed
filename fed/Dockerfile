FROM php:7.2.34-apache
ADD ../simplesamlphp-1.19.5.tar.gz /var/
RUN mv /var/simplesamlphp-1.19.5 /var/simplesamlphp
ADD ../fed/simplesamlphp /var/simplesamlphp
ADD ../fed/template/index.php /var/www/html/index.php
RUN chown -R www-data:www-data /var/simplesamlphp
RUN chown -R www-data:www-data /var/www/html
ADD ../fed/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf