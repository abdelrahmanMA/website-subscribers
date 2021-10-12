<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How to run
* ``` git clone git@github.com:abdelrahmanMA/website-subscribers.git ```

* Then you have to create the .env file by renaming .env.example to .env

* Make sure you create a database and update the credentials and database name in the .env file

* run the migrations: ```php artisan migrate```

* Create [Mailtrap](https://mailtrap.io/) to be able to see the emails being sent. Once created update the "MAIL_USERNAME" and "MAIL_PASSWORD" in the .env file.

* This App uses queue so make sure the queue is running using the following command ```php artisan queue:work --queue=high,default```

Use the following collection to view/create new records [![Run in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/ffc2ce4c771ed9882256)
