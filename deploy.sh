#!/bin/bash

composer install --no-dev --optimize-autoloader

php artisan migrate --force

php artisan db:seed --force

php artisan storage:link

php artisan optimize:clear

php artisan optimize

php artisan config:cache

php artisan route:cache

php artisan view:cache

npm install

npm run build