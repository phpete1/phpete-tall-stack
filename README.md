# phpete-tall-stack

Are you lazy like me? Are you fed up of installing Laravel, Tailwind, Alpine and configuring for your project?
This is a pre-built Laravel project with Tailwind, Alpine.js, and Livewire integrated. The following instructions will help you clone, install, and run this project.

**Note**: These steps have only been tested on **Ubuntu**.

**Disclaimer**: All scripts and software in this repository are not mine. I take NO credit. I take no responsibility if anything goes wrong.

## Requirements

Before you begin, ensure you have the following installed on your machine:

- **PHP** (version 8.1 or higher)
- **Composer** (Dependency manager for PHP)
- **Node.js** (version 16 or higher)
- **NPM** (Node Package Manager)
- **SQLite** (for local database, or any other database as configured)

## What's included in this boilerplate?

- Laravel 11.26.0
- Auto Prefixer 10.4.20
- Axios 1.7.4
- Laravel Vite Plugin 1.0
- PostCSS 8.4.47
- Tailwind CSS 3.4.13
- Vite 5.0
- AlpineJS 3.14.1
- Laravel Livewire 3.5

## Install

Just copy and paste the below code

```
git clone https://github.com/phpete1/phpete-tall-stack project-directory
cd project-directory
composer install
npm install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
```
## Troubleshooting

If you have any issues please report here.

***Keep in mind*** I won't be able to support if you are not using Ubuntu or if the issue is specific to Laravel, PHP, NPM, Compose or any of the libraries in this project.

I can only support for downloading and setting up the initial boilerplate.

Happy coding ;)
