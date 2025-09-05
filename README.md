# LiteSpeed Cache for Bagisto

A **LiteSpeed Cache integration** for the [Bagisto](https://bagisto.com/) framework that helps boost performance and reduce server load by caching frequently accessed content.  

This package allows you to easily manage cache for:  
- ⚡ Homepage static content  
- 📦 Product listings & category pages  
- 📝 CMS pages  
- 🔍 Search results  

With LiteSpeed Cache, your store will deliver content faster, reduce database queries, and scale better under high traffic.

---

## 🚀 Requirements

- [Bagisto v2.3.6](https://github.com/bagisto/bagisto/tree/v2.3.6)  
- Installed & configured [LiteSpeed Web Server](https://docs.litespeedtech.com/lsws/) with **LSCache enabled**  

👉 To verify if a URL is cached, use the [LSCache Check Tool](https://check.lscache.io/).

---

## ⚙️ Installation & Configuration

### 1. Install LiteSpeed LSCache for Laravel
Require the `litespeed/lscache-laravel` package via Composer:

```bash
composer require litespeed/lscache-laravel
```

#### Publish `Litespeed\LSCache` package's configuration:

```bash
php artisan vendor:publish --provider="Litespeed\LSCache\LSCacheServiceProvider"
```

#### Enable CacheLookup for LiteSpeed Cache:
* To enable CacheLookup for LiteSpeed Cache, add the following code, either on `server, vhost or .htaccess` level:

```bash
<IfModule LiteSpeed>
   CacheLookup on
</IfModule>
```

### 2. Configure Bagisto LSC Package
Unzip the `bagisto LSC package` zip to the bagisto root directory, and Follow the below mention steps:

#### Do couple of entries in root `composer.json` in psr-4 object:

```bash
"Webkul\\LSC\\": "packages/Webkul/LSC/src"
```

#### Goto `bootstrap/providers.php` file and add following line:

```bash
Webkul\LSC\Providers\LSCServiceProvider::class,
```

#### Run the below commands from root in terminal:

```php
composer dump-autoload
```

```php
php artisan vendor:publish --provider="Webkul\LSC\Providers\LSCServiceProvider" --force
```

```php
php artisan optimize:clear
```

### For more information about the LSCache, You can follow the [Official LiteSpeed Documentation](https://docs.litespeedtech.com/lscache/lsclaravel/installation/#installation)

- Run your store.