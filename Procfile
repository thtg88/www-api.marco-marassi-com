# vendor/bin/heroku-php-apache2 public/
web: composer optimize-laravel-cmd && php artisan octane:start --host=0.0.0.0 --port=$PORT --workers=8 --max-requests=250 --no-interaction
# php artisan queue:restart &&
worker: php artisan queue:work --tries=3 --timeout=20
release: chmod -R 777 storage bootstrap/cache
