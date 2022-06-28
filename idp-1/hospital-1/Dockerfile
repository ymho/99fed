FROM php:7.2.34-apache
ADD ../simplesamlphp-1.19.5.tar.gz /var/
RUN mv /var/simplesamlphp-1.19.5 /var/simplesamlphp
ADD ../idp-1/hospital-1/simplesamlphp /var/simplesamlphp
ADD ../idp-1/hospital-1/template/index.php /var/www/html/index.php
RUN chown -R www-data:www-data /var/simplesamlphp
RUN chown -R www-data:www-data /var/www/html
ADD ../idp-1/hospital-1/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf