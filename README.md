# Project install
- Cd to project
```
cd blog-beheer
```
- Init npm packages
```
npm install
```
- Init composer packages
```
composer install
```
- Get .env file
```
php -r "file_exists('.env') || copy('.env.example', '.env');"
```
- Get database working
```
php artisan migrate
```
- Dataabse seeden
```
php artisan refresh
```

# Project runnen | 2 terminals openen en dan de artisan serve openen.
- cd into project
```
cd blog-beheer
```
- Run npm
```
npm run dev
```
- Run artisan
```
php artisan serve
```
