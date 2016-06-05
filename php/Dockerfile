FROM php:fpm
RUN apt-get update && docker-php-ext-install mysqli pdo pdo_mysql\ 
				   && apt-get install -y zlib1g-dev \
				   && apt-get install -y vim \
				   && docker-php-ext-install zip
RUN apt-get install -y git
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === '070854512ef404f16bac87071a6db9fd9721da1684cd4589b1196c3faf71b9a2682e2311b36a5079825e155ac7ce150d') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN php composer.phar global require "laravel/installer"
RUN export PATH=$PATH:~/.composer/vendor/bin
