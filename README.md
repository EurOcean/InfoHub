Infohub - EurOcean API

How to Install:
Requirements: php >7, mysql, apache or nginx, composer.

Server Installation Guide:
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-20-04-es

Composer and laravel Installation Guide:
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-20-04-es


After the installations and configurations, we prepare the project to run in local

clone the github repository:
git clone -b master gitxxxxxxxx

configure database connection in .env file:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=XXXX
DB_DATABASE=eurocean_infohub
DB_USERNAME=’username’
DB_PASSWORD=’password’

Run the command: composer install / composer update
we run the migrations and inject the seeder data we run the command: php artisan migrate:fresh –seed
To put the system live run: php artisan serve
# InfoHub
