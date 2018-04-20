FROM webdevops/php-apache-dev:7.1

WORKDIR /docker

ENV WEB_DOCUMENT_ROOT=/docker/web

RUN pecl install mongodb && docker-php-ext-enable mongodb
RUN curl -sL https://deb.nodesource.com/setup_9.x | bash - && apt-get install -y nodejs && npm install -g bower less

RUN echo 'alias sf="php bin/console"' >> ~/.bashrc
