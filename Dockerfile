FROM php:7.1.2-apache 
RUN docker-php-ext-install mysqli
 
FROM php:fpm
RUN apt-get update && apt-get install -y sendmail
ADD ./php.sh /opt/php.sh
ADD sendmail.ini /usr/local/etc/php/conf.d/
RUN chmod u+x /opt/php.sh
WORKDIR /opt
CMD ["php.sh"]