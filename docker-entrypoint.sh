#!/bin/sh
set -e

# Copy .env.example to .env
if [ ! -f /var/www/html/.env ]; then
    cp /var/www/html/.env.example /var/www/html/.env
fi

# Ensure SQLite file exists
mkdir -p /var/www/html/database
touch /var/www/html/database/database.sqlite

# Ensure storage directories exist
mkdir -p /var/www/html/storage/framework/sessions \
         /var/www/html/storage/framework/views \
         /var/www/html/storage/framework/cache \
         /var/www/html/storage/logs \
         /var/www/html/bootstrap/cache

# Fix permissions
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# Run migrations
php artisan migrate --force --no-interaction || true

# Clear & Cache config
php artisan config:clear || true
php artisan view:clear || true
php artisan route:clear || true

exec apache2-foreground
