# Pets-API

GraphQL API of pets library.


**Clone of Pet Library graphql api:** http://pet-library.moonhighway.com/


## Getting Started

Clone the project repository by running the command below if you use SSH

```bash
git clone git@github.com:iarafat/pets-api.git
```

If you use https, use this instead

```bash
git clone https://github.com/iarafat/pets-api.git
```

After cloning,run:

```bash
composer install
```

Duplicate `.env.example` and rename it `.env`

Then run:

```bash
php artisan key:generate

php artisan jwt:secret
```

### Prerequisites

Be sure to fill in your database details in your `.env` file before running the migrations:

```bash
php artisan migrate --seed
```

And finally, start the application:

```bash
php artisan serve
```

visit [http://localhost:8000/graphiql](http://localhost:8000/graphiql) to see the application in action and [http://localhost:8000/graphiql/user](http://localhost:8000/graphiql/user) for authenticated user.

## Built With

* [Laravel](https://laravel.com) - The PHP Framework For Web Artisans
* [GraphQL](https://graphql.org) - A query language for your API

## Acknowledgments

* [graphql-laravel](https://github.com/rebing/graphql-laravel#creating-a-mutation)
