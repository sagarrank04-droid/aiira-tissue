#!/bin/sh
set -e

# Ensure SQLite file exists
if [ ! -f /var/www/html/database/database.sqlite ]; then
    touch /var/www/html/database/database.sqlite
fi

# Ensure storage directories exist
mkdir -p /var/www/html/storage/framework/sessions \
         /var/www/html/storage/framework/views \
         /var/www/html/storage/framework/cache \
         /var/www/html/storage/logs \
         /var/www/html/bootstrap/cache

# Fix permissions
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# If APP_KEY is not set in environment, generate one or set fallback
if [ -z "$APP_KEY" ]; then
    export APP_KEY="base64:AfCohnQ8AOmRiFImh9dy9CZoW5WbmaOpogGS+bHqpf4="
fi

# Cache routes and views
php artisan config:clear || true
php artisan view:clear || true

exec apache2-foreground
