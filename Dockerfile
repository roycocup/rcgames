FROM php:7.2-fpm

RUN docker-php-ext-install -j$(nproc) pdo_mysql

WORKDIR /app

RUN apt update
RUN apt install -y \
    nginx \
    supervisor

COPY . .
RUN mv ./deploy/www.conf /usr/local/etc/php-fpm.d/www.conf
RUN mv ./deploy/default /etc/nginx/conf.d/default
RUN mv ./deploy/supervisord.conf /etc/supervisord.conf
RUN mv ./deploy/entrypoint.sh entrypoint.sh

# RUN chmod +x entrypoint.sh
# ENTRYPOINT [ "entrypoint.sh" ]

EXPOSE 80 

