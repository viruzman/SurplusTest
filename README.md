# SurplusTest

## Add files

```
cd existing_repo
git clone -b main https://github.com/viruzman/SurplusTest.git
```

## Prepare

- [ ] Copy paste file .env.example, then rename it to .env
- [ ] Open your database, create new database, using pgsql database
- [ ] Edit .env file with your database name, username, and password
- [ ] Open command line, then add the following command:

```
cd SurplusTest
composer install
php artisan migrate
php artisan db:seed
php artisan storage:link
php artisan serve
```


## Usage

- [ ] Now the application ready to use in http://127.0.0.1:8000
- [ ] List api that can use:

```
GET     /api/categories
POST    /api/categories             Param: [name, enable]
GET     /api/categories/{id}
DELETE  /api/categories/{id}
PUT     /api/categories/{id}        Param: [name, enable]

GET     /api/products
POST    /api/products             Param: [name, enable, description]
GET     /api/products/{id}
DELETE  /api/products/{id}
PUT     /api/products/{id}        Param: [name, enable, description]

GET     /api/images
POST    /api/images             Param: [name, enable, file]
GET     /api/images/{id}
DELETE  /api/images/{id}
POST    /api/images/{id}/edit        Param: [name, enable, file]

GET     /api/category_products
POST    /api/category_products             Param: [product_id, category_id]
GET     /api/category_products/{id}
DELETE  /api/category_products/{id}
PUT     /api/category_products/{id}        Param: [product_id, category_id]

GET     /api/product_images
POST    /api/product_images             Param: [product_id, image_id]
GET     /api/product_images/{id}
DELETE  /api/product_images/{id}
PUT     /api/product_images/{id}        Param: [product_id, image_id]
```