# Point of Sale on PHP (LARVEL)
The intention of this project is to create simple web-based Point of Sale system using Laraval.
 

# Requirements 
* [PHP](http://php.net)
* [Laravel](http://www.laravel.com)
* [VueJS](http://www.vuejs.org)
* [Composer](http://getcomposer.org) 
* [NodeJS/NPM](http://nodejs.org)
* [Git](http://git-scm.com)

# Installation
Clone repository
```
$ git clone https://github.com/Lmarcho/pos-system.git

```

Rename the .env.example to .env and change setting accordingly.  
Make sure the database schema also already created in your database.
```
Windows -> $ copy .env.example .env
  
Linux   -> $ cp .env.example .env
```

Run the Composer
```
$ composer install
```

Run the Npm
```
$ npm run dev 
```

Run the installation process
```
$ php artisan app:install
```

Run for the migrations
```
$ php artisan migrate
```

If something seem not right maybe try to dump-autoload and redo the process
```
$ composer dump-autoload
```

# Features Suggestion
Fell free to add any feature suggestion by creating new **Issues**, and we can start discussing it










