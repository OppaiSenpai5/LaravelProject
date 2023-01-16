# About
This project a management system for animes vaguely similar to sites like [AniList.co](https://anilist.co/) and is built with the [Laravel](https://laravel.com/) framework.

## Setup

### Requirements
The project requires the following to work:
- php 8
- composer
- Laravel 9
- 
### Download
You can clone the git repository using the following command:
```
git clone https://github.com/OppaiSenpai5/LaravelProject
```

### Environment Configuration
Create `.env` file using the `.env.example` file provided.

### Run the project
In order to run the project you'll need to run the following commands in the project folder first:
```
composer update
composer install
npm install
php artisan key:generate
php artisan storage:link
php artisan migrate --seed
npm run build
php artisan serve
```
