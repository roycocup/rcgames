FROM php:5.6.39-apache-stretch

RUN docker-php-ext-install -j$(nproc) pdo_mysql

WORKDIR /var/www/html
    
COPY . .
RUN mv ./deploy/000-default.conf /etc/apache2/sites-available 
RUN mv ./deploy/apache2.conf /etc/apache2/apache2.conf 

# CMD [ "apache2-foreground" ]
CMD [ "bash" ]

EXPOSE 80 

