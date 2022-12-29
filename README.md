# Laravel 9 + InertiaJS + Vue 3 Base

This is a base project ready to use.


# Installation
## Requirements
- Composer
- NodeJS
- PHP 8+

## Update to PHP 8 on Laragon
- Go to PHP official website and download PHP 8 version.
- Put the zip on C:\laragon\bin\php (or the path that corresponds to your development environment).
- Descompress in a folder with same name that downloaded zip.
- Modify C:\laragon\etc\apache2\mod_php.conf changing php8_module to php_module (delete 8).
- Modify your php.ini removing (;) from ;extension=fileinfo line.
- Stop and start Laragon.

## Use the project
Clone the repo:
```bash
  git clone https://github.com/eocalix/laravel9-inertiajs-vue3-base.git my-project
  cd my-project
```

Install PHP dependencies:
```bash
  composer install
```

Install NPM dependencies:
```bash
  npm ci
```

Build assets:
```bash
  npm run dev
```

Setup configuration:
```bash
  cp .env.example .env
```

Generate application key:
```bash
  php artisan key:generate
```

