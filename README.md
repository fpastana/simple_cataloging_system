<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Simple Catalog System

System created for cataloging

## Additional info

Is has been using migrations and seeds, so that the prompt commands may run the system perfectly.

## Technology Stack

- [Laravel v6.x](https://laravel.com): This is a PHP MVC Framework.
- [MYSQL](https://www.mysql.com/): MySQL a Relational Database

# System Requirements

-   PHP v7.1 
-   Composer
-   Any Laravel supported database
-   JavaScript
-   As the current version is built on Laravel v10.x, all requirements of this version of Laravel MUST be met [as stated here](https://laravel.com/docs/6.x/deployment#server-requirements).



PS: Prepare the file .env before run the comand below.

```
# php artisan key:generate
```
```
# php artisan migrate:refresh --seed
```

## URLs

To save time, It uses only GET requests, even to insert and delete data. Follow the URLs:

- catalog
- catalog/list_all_products
- catalog/list_all_product_categories
- catalog/retrieve_product?sku=DISH234ZFDR
- catalog/destroy_product?sku=DISH234ZFDR
- catalog/store_product


