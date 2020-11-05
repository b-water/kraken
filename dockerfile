FROM php:7.4-fpm

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

# Install dependencies
RUN apt-get update && apt-get install -y --fix-missing \
    build-essential \
    gnupg \
    libpng-dev \
    libonig-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    unzip \
    git \
    curl \
    zlib1g-dev \
    libzip-dev &&\
    curl -sL https://deb.nodesource.com/setup_14.x | bash - &&\
    apt-get update &&\
    apt-get install -y --no-install-recommends nodejs


# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g $UID $USER
RUN useradd -u $UID -ms /bin/bash -g $USER $USER

# Copy existing application directory contents
COPY . $BASE_DIR

# Copy existing application directory permissions
COPY --chown=$USER:$USER . $BASE_DIR

# Change current user to www
USER $USER

# Expose port 9000 and start php-fpm server
EXPOSE $PORT
CMD ["php-fpm"]