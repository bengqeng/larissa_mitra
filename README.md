# REQUIREMENT
1. Composer
2. PHP 7.4
3. MYSQL
4. Node

# How to install
##without Docker
1. clone repository
2. copy file .env.example and rename to .env
3. fill the database mysql config on .env
4. run 'composer install'
5. run 'npm install'
6. run 'php artisan migrate:fresh'
7. run 'php artisan:serve'
8. go to your browser and access 'localhost:8000'

##Docker
1. clone repository
2. copy file .env.example and rename to .env
4. run 'composer install'
5. run 'npm install'
6. run 'php artisan migrate:fresh'
7. run 'php artisan:serve'
8. run 'docker compose -f docker-compose_development.yml up'
8. go to your browser and access 'localhost:8000'
