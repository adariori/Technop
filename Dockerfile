# --- Étape 1 : build des assets front (Vite) ---
FROM node:20-alpine AS assets
WORKDIR /app
COPY package*.json ./
RUN npm ci
COPY resources resources
COPY vite.config.js ./
RUN npm run build

# --- Étape 2 : dépendances PHP ---
FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-interaction --no-scripts --prefer-dist --optimize-autoloader

# --- Étape 3 : image finale ---
FROM php:8.2-cli-alpine

RUN apk add --no-cache sqlite-dev \
    && docker-php-ext-install pdo pdo_sqlite \
    && apk del sqlite-dev \
    && apk add --no-cache sqlite-libs

WORKDIR /var/www/html

COPY . .
COPY --from=vendor /app/vendor vendor
COPY --from=assets /app/public/build public/build

RUN mkdir -p database \
    && touch database/database.sqlite \
    && mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views storage/logs bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 10000

ENTRYPOINT ["entrypoint.sh"]
