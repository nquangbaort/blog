#blog
1. copy file .env.example to file .env
```
copy .env.example .env
```
2. install packages 
```
$ composer install
```
3. set key in environment
```
$ php artisan key:generate
```
4. Config env
```
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=
```
5. Migration and seeder
```
$ php artisan migrate --seed
```
6. Start server
```
$ php artisan serve --port=8000
```
7. Open browser 
```
http://127.0.0.1:8000/admin/login
```
