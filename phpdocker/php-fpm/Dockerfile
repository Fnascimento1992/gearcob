FROM phpdockerio/php:8.1-fpm
WORKDIR "/application"

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        git \ 
        php8.1-amqp \ 
        php8.1-bz2 \ 
        php8.1-cgi \ 
        php8.1-gd \ 
        php8.1-gmp \ 
        php8.1-http \ 
        php8.1-imap \ 
        php8.1-memcache \ 
        php8.1-memcached \ 
        php8.1-mongodb \ 
        php8.1-mysql \ 
        php8.1-odbc \ 
        php8.1-pgsql \ 
        php8.1-phpdbg \ 
        php8.1-psr \ 
        php8.1-snmp \ 
        php8.1-soap \ 
        php8.1-uuid \ 
        php8.1-xdebug \ 
        php8.1-yaml; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
