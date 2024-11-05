# phpete-tall-stack

**Are you lazy like me?**

**Are you fed up of installing Tailwind, Alpine, Livewire and configuring for your Laravel project?**

Then you're in the right place!

This is a pre-built boilerplate project with Tailwind, Alpine.js, Laravel and Livewire integrated **(TALL stack)**.

**Note**: These install steps have only been tested on **Ubuntu**. Might work on Mac. Definetely won't work on Windows (like everything else).

**Disclaimer**: All scripts and software in this repository are not mine. I take NO credit. I take no responsibility if anything goes wrong.

## Requirements

Before you begin, make sure you have the following stuff setup (or it won't work):

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
wget https://github.com/phpete1/phpete-tall-stack/archive/refs/heads/master.zip
unzip master.zip && mv phpete-tall-stack-master project-directory
cd project-directory
composer install
npm install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
```

Once you're done, run this code

```
php artisan serve
npm run dev
```
Visit the app via localhost:8000 (or whatever port you specify) and you should see a working Alpine script, with a Tailwind style.

## Troubleshooting

If you have any issues with installing please report here.

***Keep in mind*** I won't be able to support if you are not using Ubuntu or if the issue is specific to Laravel, PHP, NPM, Compose or any of the libraries in this project.

I can only support for downloading and setting up the initial boilerplate.

## Contributing

If you fancy testing on macOS and Windows, submit a pull-request with the instructions and I'll even buy you a coffee.

Happy coding ;)

> "...For the LORD sees not as man sees: man looks on the outward appearance, but the LORD looks on the heart.” 1 Samuel 16:7
