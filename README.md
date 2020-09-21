# Test app

## Dependencies

- PHP >= 7.3
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

### Install dependencies

Project utilizes [Composer](https://getcomposer.org/). Make sure you have Composer installed on your machine.

## Install

```git clone https://github.com/Patch-f/demo-shop.git```

```composer install```

## Server side config

Point of entry

```/public```

Copy settings

```cp .env.example .env```

Don't forget to generate your key.

```php artisan key:generate```

Make migrations

```php artisan migrate```

### If you need test data

```php artisan db:seed```