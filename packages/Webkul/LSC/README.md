# Introduction:

Bagisto LSCache System

## Requirements

- **Bagisto v2.3.6**

## Note
* Install and configure Bagisto over [LiteSpeed Server](https://docs.litespeedtech.com/lsws/).
* Make sure LSCache is enabled from your LiteSpeed Web Server.
* To see if a URL is cached by LiteSpeed LiteSpeed: Use [LSCache](https://check.lscache.io/) Tool.

### Follow the below mention steps to configure [`lscache-laravel`](https://docs.litespeedtech.com/lscache/lsclaravel/installation/#installation) package:

#### Require `litespeed/lscache-laravel` package using composer:

~~~
composer require litespeed/lscache-laravel
~~~

#### Publish `Litespeed\LSCache` package's configuration:

~~~
php artisan vendor:publish --provider="Litespeed\LSCache\LSCacheServiceProvider"
~~~

#### Enable CacheLookup for LiteSpeed Cache:
* To enable CacheLookup for LiteSpeed Cache, add the following code, either on `server, vhost or .htaccess` level:

~~~
<IfModule LiteSpeed>
   CacheLookup on
</IfModule>
~~~

### Unzip the bagisto LSC package zip to the bagisto root directory, and Follow the below mention steps:

#### Do couple of entries in root `composer.json` in psr-4 object:

~~~
"Webkul\\LSC\\": "packages/Webkul/LSC/src"
~~~

#### Goto `bootstrap/providers.php` file and add following line:

~~~
Webkul\LSC\Providers\LSCServiceProvider::class,
~~~

#### Run the below commands from root in terminal:

~~~
composer dump-autoload
~~~

~~~
php artisan vendor:publish --provider="Webkul\LSC\Providers\LSCServiceProvider" --force
~~~

~~~
php artisan optimize:clear
~~~

### For more information about the LSCache, You can follow the [Official LiteSpeed Documentation](https://docs.litespeedtech.com/lscache/lsclaravel/installation/#installation)

- Run your store.