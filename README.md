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

### Roles and Permissions
>>> php artisan make:migration create_roles_table
>>> php artisan make:migration create_permissions_table
>>> php artisan migrate
>>> php artisan ide:models

>>> php artisan migrate:rollback

### Role Factory
>>> php artisan make:factory RoleFactory
>>> php artisan db:seed

### Json Resources - Used to create API objects
>>> php artisan make:resource UserResource
>>> php artisan make:resource PermissionResource

### Create Seeder | Attach, Detach and Sync collections

>>> php artisan make:seeder UserSeeder
>>> php artisan make:seeder RoleSeeder
>>> php artisan make:seeder PermissionSeeder
php artisan db:seed --class=PermissionSeeder