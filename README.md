## Installing Packages


To install the packages after cloning the repository use the command:

```
composer install
```

## Configuring the MySQL database


Make sure docker is installed on your machine and use the command:

```
docker-compose up -d
```

## Configuring the env file

The env file will give us connection to every database and other things that need more security. Replace the key and the database connection along with the parameters described in the env.example file:


```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:Po+zduUhzEsgHPZQ4i+D5z/tUpwmteCwD94PtHzeXt8=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbshop
DB_USERNAME=root
DB_PASSWORD=P@ssw0rd
```

### Run Migrations and Seeding
```
php  artisan migrate:fresh --seed
```

## Run Project

```
php  artisan serve

```

