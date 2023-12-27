FROM php:8.2-fpm

RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_pgsql

#RUN apt-get update && \
#    apt-get install -y wget gnupg2 libpq5 libpq-dev && docker-php-ext-install pdo pdo_pgsql
#RUN echo "deb http://apt.postgresql.org/pub/repos/apt/ trusty-pgdg main 9.6" > /etc/apt/sources.list.d/pgdg.list
##RUN wget --quiet -O - https://www.postgresql.org/media/keys/ACCC4CF8.asc | \
##   apt-key add -
#RUN apt-get update
#RUN apt-get install -y postgresql-client-9.6
#COPY ./wait-for-postgres.sh wait-for-postgres.sh
#RUN chmod +x wait-for-postgres.sh
#COPY src/ /var/www/html

#RUN mkdir -p /usr/src/php/ext/redis \
#    && curl -L https://github.com/phpredis/phpredis/archive/5.3.4.tar.gz | tar xvz -C /usr/src/php/ext/redis --strip 1 \
#    && echo 'redis' >> /usr/src/php-available-exts \
#    && docker-php-ext-install redis
