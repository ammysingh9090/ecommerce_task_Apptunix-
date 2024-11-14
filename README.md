1, create database :- ecommerce_task

composer update
npm install
npm run dev
php artisan key:generate
php artisan migrate:fresh --seed
php artisan config:cache
php artisan route:cache




