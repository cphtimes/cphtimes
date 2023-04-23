#!/bin/sh

cd /var/www

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force

echo "Clearing schedule cache..."
php artisan schedule:clear-cache

/usr/bin/supervisord -c /etc/supervisord.conf