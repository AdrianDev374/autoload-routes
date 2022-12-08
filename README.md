# Autoload Routes

Laravel package to load route files automatically. You can specify
several directories where the package will look for all the
files and include them for you. It is useful when you want to separate your application
by modules, and you want to have the routes organized by files. It will help
you increase productivity and not waste time manually adding the files to the
route provider, as this package will do it for you.

## How to use

The first thing is to install the package from the composer dependency manager

> composer require adriandev374/autoload-routes

Route files loaded by default. All files found within these directories will be automatically
loaded into their respective middleware groups.

| Group Middleware WEB | Group Middleware API |
|----------------------|----------------------|
| src/autoload/web     | src/autoload/api     |

Of course this is configurable, you can publish the configuration file and make it more flexible.

> php artisan vendor:publish --tag=autoload-routes

Save time having to manually load these route files.

