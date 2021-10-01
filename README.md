## Setup Guide

Install the dependencies

```
composer install
```

Migrate the migrations 

```
php artisan migrate
```

Start the server

```
php artisan serve
```

Note: if you want to populate the database with dummy data.

run `php artisan db:seed`

For updating dependencies (if required)

run `composer update`

Generate Application Key 

run `php artisan key:generate`

<strong>To execute a patch request on Postman, you need to label it as a post request and pass "_method:patch" key value in the body.</strong>



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
