FROM alpine:3.8

RUN apk update 

RUN apk add \
    htop \
    vim \ 
    nginx \
    curl \
    bash \
    supervisor

RUN apk add \
    php7-fpm \
    php-pdo


RUN mkdir -p /run/nginx && chmod 0777 /run 

WORKDIR /var/www/html

COPY . . 

COPY supervisord.conf /etc/supervisord.conf
COPY default /etc/nginx/conf.d/default

CMD [ "supervisord" ]
EXPOSE 80