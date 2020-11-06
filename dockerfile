FROM php:fpm-alpine3.12

# User, UID/GID and Port ENV
ARG USER=www
ENV USER=${USER}

ARG UID=1000
ENV UID=${UID}

ARG PORT=9000
ENV PORT=${PORT}

ENV BASE_DIR=/var/www

# Copy composer.lock and composer.json
COPY composer.lock composer.json $BASE_DIR/

# Set working directory
WORKDIR $BASE_DIR

# Update System
RUN apk update && apk upgrade

# Install dependencies
RUN apk add g++ make zip unzip git curl nodejs nodejs-npm composer

# Add user for laravel application
RUN addgroup -S $USER
RUN adduser $USER --disabled-password -G $USER

# Copy existing application directory contents
COPY . $BASE_DIR

# Copy existing application directory permissions
COPY --chown=$USER:$USER . $BASE_DIR

# Install PHP Extensions
RUN docker-php-ext-install mysqli pdo_mysql

# Change current user to www
USER $USER

# Expose port 9000 and start php-fpm server
EXPOSE $PORT
CMD ["php-fpm"]