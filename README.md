# Dealer Inspire PHP Code Challenge

Dealer Inspire PHP Code challenge submission by John Blyberg 

## Getting Started

I used Laravel 5.6 as my framework to complete this challenge. You will need to do a few things to set up the environment before this will run properly.

Once you have cloned this repo:

```
cd php-contact-form
composer update
cp dot_env .env
```

Be sure to edit ```config/database.php``` to match your SQL server situation.

Update your mailer settings in ```.env```

Then run:

```
php artisan migrate
```

The following should now run successfully:

```
phpunit
php -S 127.0.0.1:9999 -t public
```