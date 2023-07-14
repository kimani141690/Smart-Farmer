#!/bin/bash

# run composer install
echo "Running composer install..."
composer install

# run composer update
echo "Running composer update..."
composer update

# require laravel/socialite
echo "Requiring laravel/socialite..."
composer require laravel/socialite

# copy .env.example .env
echo "Copying .env.example to .env..."
cp .env.example .env

# generate key
echo "Generating artisan key..."
php artisan key:generate

# run migrations and seed the database
echo "Running database migrations and seeding..."
php artisan migrate --seed

# serve the application
echo "Serving the application..."
php artisan serve
