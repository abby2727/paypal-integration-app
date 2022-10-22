<h1 align="center">Backend Developer Technical Exam</h1>

<p align="justify">A web app contains login and registration page with PayPal integration.</p>
•   Author: <a href="https://abby2727.github.io/my-portfolio/"> Abdul Pangandaman </a> <br>
•   Twitter: <a href="https://twitter.com/abby_2727"> @abby_2727 </a> <br>
•   Instagram: <a href="https://www.instagram.com/abbyyyyys_/"> @abbyyyyys_ </a> <br>

## Requirement
•   PHP 8.0.2 or higher

## Installation
Setting up your development environment on your local machine:
```
git clone https://github.com/abby2727/paypal-integration-app.git
cd paypal-integration-app
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan optimize
php artisan db:seed
php artisan serve
```
## Before Starting

Create Database and Set-up db credential on .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=paypal_integration_app
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

## Website Login Credentials:
You may use this credential after runing db:seed (see Installation). 

```
E-Mail Address: abby@example.com
Password: password
```

Or you can register your own account.


## Note
Create account on PayPal and assign your own key:
```
PAYPAL_MODE=sandbox
PAYPAL_SANDBOX_CLIENT_ID=
PAYPAL_SANDBOX_CLIENT_SECRET=

PAYPAL_LIVE_CLIENT_ID=
PAYPAL_LIVE_CLIENT_SECRET=
```
