# Auth Controller
## Custom Request - validation
>>> php artisan make:request RegisterRequest

## IDE Helper Configuration
>>> composer require --dev barryvdh/laravel-ide-helper
>>> php artisan ide-helper:generate
>>> php artisan ide:models

# User Controller
>>> php artisan make:controller UserController --api

>>> php artisan route:list

### Database seeder
>>> php artisan db:seed

## Creating Custom User Request - validation
>>> php artisan make:request UserCreateRequest
>>> php artisan make:request UserUpdateRequest