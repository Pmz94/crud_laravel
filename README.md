# CRUD Laravel

CRUD hecho con laravel 5.4

## Configuracion

Instala las dependencias de composer:
```bash
/crud_laravel$ composer install
```

o si tienes un archivo `composer.phar`:
```bash
/crud_laravel$ php composer.phar install
```

Si no hay un archivo `.env`, copia el archivo `.env.example` y renombralo a `.env`

Puedes usar el sig comando:
```bash
# Linux
/crud_laravel$ cp .env.example .env

# Windows
\crud_laravel> copy .env.example .env
```

Luego corre el comando:
```bash
/crud_laravel$ php artisan key:generate
```

En el nuevo archivo `.env` introduce las credenciales para la BD a la que hay que conectarse:
```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=crud_laravel
DB_USERNAME=root
DB_PASSWORD=
```

Crea una BD que se llame `crud_laravel`.

Luego corre los sig comandos:
```bash
/crud_laravel$ php artisan migrate:install
```
Si te fijas en tu BD se creo una tabla que se llama `migrations`.

Para crear las demas tablas corre:
```bash
/crud_laravel$ php artisan migrate
```

Corre este comando:
```bash
/crud_laravel$ php composer.phar dump.autoload
```

Para llenar esas tablas con datos dummy corre:
```bash
/crud_laravel$ php artisan db:seed
```

Para hacer deploy al web server corre:
```bash
/crud_laravel$ php artisan serve
```