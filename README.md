Infohub - EuroOcean API

Como instalar:
Temos que ter instalados php >7, mysql, apache ou nginx, composer.

Guia de instalação de servidor:
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-20-04-es

Guia de instalação de composer e laravel:
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-20-04-es


Apos das instalações e configurações preparamos o projeto para correr em local

clonar o repositorio de github:
git clone -b master gitxxxxxxxx

configurar a ligação a base dados no ficheiro .env 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=XXXX
DB_DATABASE=eurocean_infohub
DB_USERNAME=’username’
DB_PASSWORD=’password’

corremos o comando: composer install / composer update
corrermos as migrações e injectamos a data da seeder corremos o comando: php artisan migrate:fresh –seed
para levantar o sistema corremos: php artisan serve
# InfoHub
