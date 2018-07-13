FROM webdevops/php-apache-dev:7.1

WORKDIR /docker

ENV WEB_DOCUMENT_ROOT=/docker/web

RUN pecl install mongodb && docker-php-ext-enable mongodb
RUN curl -sL https://deb.nodesource.com/setup_9.x | bash - && apt-get install -y nodejs && npm install -g bower less

RUN echo 'alias sf="php bin/console"' >> ~/.bashrc
RUN echo '{ "allow_root": true }' > ~/.bowerrc

RUN echo opcache.memory_consumption = 256 >> /opt/docker/etc/php/php.ini
RUN echo opcache.max_accelerated_files = 20000 >> /opt/docker/etc/php/php.ini
RUN echo realpath_cache_size = 4096K >> /opt/docker/etc/php/php.ini
RUN echo realpath_cache_ttl = 600 >> /opt/docker/etc/php/php.ini
