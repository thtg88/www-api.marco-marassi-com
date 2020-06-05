web: vendor/bin/heroku-php-apache2 public/
release: chmod -R 777 storage bootstrap/cache && php artisan config:cache && php artisan route:cache
worker: php artisan queue:restart && php artisan queue:work --tries=3 --timeout=20
