FROM php:7.0

ARG composer_checksum=55d6ead61b29c7bdee5cccfb50076874187bd9f21f65d8991d46ec5cc90518f447387fb9f76ebae1fbbacf329e583e30
ARG composer_url=https://raw.githubusercontent.com/composer/getcomposer.org/ba0141a67b9bd1733409b71c28973f7901db201d/web/installer

ENV COMPOSER_ALLOW_SUPERUSER=1
ENV PATH=$PATH:vendor/bin

RUN apt-get update && apt-get install -y --no-install-recommends \
      curl \
      git \
      python-setuptools \
      python-dev \
      python-pip \
      zlib1g-dev libicu-dev g++ \
      libxml2-dev \
      libxslt1-dev \
      libfreetype6-dev \
      libjpeg62-turbo-dev \
      libmcrypt-dev \
      libpng-dev \
 && pip install awscli \
 && docker-php-ext-install zip \
 && docker-php-ext-install -j$(nproc) iconv mcrypt soap pdo_mysql xsl bcmath \
 && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
 && docker-php-ext-install -j$(nproc) gd \
 && docker-php-ext-configure intl \
 && docker-php-ext-install intl \
 && curl -o installer "$composer_url" \
 && echo "$composer_checksum *installer" | shasum -c -a 384 \
 && php installer --install-dir=/usr/local/bin --filename=composer \
 && rm -rf /var/lib/apt/lists/*
