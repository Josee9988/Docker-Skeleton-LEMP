FROM phpdockerio/php74-fpm:latest

ARG APPLICATION_DOMAIN
ARG IS_HTTPS_ENABLED
ENV APPLICATION_DOMAIN $APPLICATION_DOMAIN
ENV IS_HTTPS_ENABLED $IS_HTTPS_ENABLED

COPY nginx/ssl/generate-ssl.sh /etc/nginx/generate-ssl.sh
RUN chmod +x /etc/nginx/generate-ssl.sh
RUN cd /etc/nginx && ./generate-ssl.sh

COPY nginx/vhosts/vhost.sh /etc/nginx/vhost.sh
RUN chmod +x /etc/nginx/vhost.sh
RUN mkdir -p /etc/nginx/conf.d/ && touch /etc/nginx/conf.d/default.conf
RUN cd /etc/nginx && ./vhost.sh

WORKDIR "/application"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.4-mysql \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install git
RUN apt-get update \
    && apt-get -y install git \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

EXPOSE 80
EXPOSE 443