# SGE — Sistema de Gestión Empresarial

Sistema de Gestión Empresarial desarrollado en Laravel para apoyar la administración de una empresa de transporte.

## 1. Descripción del proyecto

El proyecto busca centralizar y organizar la información empresarial, facilitando la gestión de clientes, productos, categorías y operaciones de venta.

La aplicación fue desarrollada utilizando Laravel bajo el patrón MVC, Eloquent ORM, Blade, Tailwind CSS, Docker y Laravel Sail.

## 2. Objetivos

### Objetivo general

Desarrollar un Sistema de Gestión Empresarial que permita administrar la información de una empresa de transporte de manera organizada, centralizada y eficiente.

### Objetivos específicos

- Gestionar clientes.
- Gestionar categorías de productos.
- Gestionar productos e inventario.
- Registrar ventas y sus detalles.
- Implementar relaciones entre las entidades mediante Eloquent.
- Aplicar operaciones CRUD.
- Utilizar seeders para cargar datos de prueba.
- Implementar autenticación de usuarios.
- Mantener una interfaz web clara y sencilla.

## 3. Tecnologías utilizadas

- Laravel 13
- PHP 8.5
- MySQL 8.4
- Docker
- Laravel Sail
- Blade
- Tailwind CSS
- Eloquent ORM
- Git y GitHub

## 4. Arquitectura

El proyecto utiliza el patrón MVC:

- **Modelos:** representan las entidades y relaciones de la base de datos.
- **Vistas:** desarrolladas con Blade para la interfaz.
- **Controladores:** contienen la lógica de las operaciones y conectan modelos con vistas.

Flujo general:

```text
Usuario
   ↓
Ruta
   ↓
Controlador
   ↓
Modelo / Eloquent
   ↓
Base de datos
   ↓
Controlador
   ↓
Vista Blade
   ↓
Usuario
```

## 5. Módulos principales

- **Usuarios:** Permite autenticación, inicio de sesión, registro y gestión del perfil.
- **Clientes:** Permite registrar y administrar la información de los clientes.
- **Categorías:** Permite clasificar los productos utilizados en la gestión empresarial.
- **Productos:** Permite administrar productos, código, precio, stock, descripción y categoría.
- **Ventas:** Permite registrar operaciones de venta asociadas a clientes.
- **Detalles de venta:** Relaciona cada venta con los productos incluidos, indicando cantidad y precio unitario.

## 6. Modelo Entidad-Relación

El sistema utiliza cinco entidades principales:

- `CATEGORIES`
- `CLIENTS`
- `PRODUCTS`
- `SALES`
- `SALE_DETAILS`

También se encuentra disponible la versión editable del modelo en [Ver diagrama Mermaid](docs/diagrama_mer.mmd).

## 7. Relaciones de la base de datos

```text
CATEGORIES 1 ─────── N PRODUCTS

CLIENTS 1 ────────── N SALES

SALES 1 ───────────── N SALE_DETAILS

PRODUCTS 1 ───────── N SALE_DETAILS
```

Relaciones implementadas mediante Eloquent:

- `Category` hasMany `Product`
- `Product` belongsTo `Category`
- `Client` hasMany `Sale`
- `Sale` belongsTo `Client`
- `Sale` hasMany `SaleDetail`
- `SaleDetail` belongsTo `Sale`
- `SaleDetail` belongsTo `Product`

## 8. Migraciones

Las principales tablas implementadas son:

- **Categories:** `id`, `name`, `description`, `timestamps`.
- **Clients:** `id`, `name`, `phone`, `email`, `address`, `timestamps`.
- **Products:** `id`, `category_id`, `name`, `code`, `price`, `stock`, `description`, `timestamps`.
- **Sales:** `id`, `client_id`, `date`, `total`, `status`, `timestamps`.
- **Sale Details:** `id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `timestamps`.

Las claves foráneas permiten mantener la relación entre las entidades.

## 9. Modelos Eloquent

Los modelos principales son:

```text
app/Models/
├── Category.php
├── Client.php
├── Product.php
├── Sale.php
├── SaleDetail.php
└── User.php
```

Los modelos utilizan `$fillable` para definir los campos que pueden ser asignados mediante asignación masiva. También se implementaron las relaciones `hasMany` y `belongsTo`.

## 10. Controlador Resource

El módulo de productos utiliza un controlador Resource:

`app/Http/Controllers/ProductController.php`

Incluye las operaciones: `index`, `create`, `store`, `show`, `edit`, `update`, `destroy`.

La ruta Resource se encuentra definida como:

```php
Route::resource('products', ProductController::class);
```

## 11. Eager Loading

Para evitar consultas innecesarias a la base de datos se utiliza eager loading.

Ejemplo en productos:

```php
$products = Product::with('category')
    ->disponibles()
    ->latest()
    ->get();
```

También se utiliza eager loading en las relaciones de ventas:

```php
Sale::with('client', 'details.product')
```

Esto permite cargar las relaciones necesarias de manera anticipada y reducir consultas adicionales.

## 12. Scope de productos disponibles

El modelo `Product` implementa el scope:

```php
public function scopeDisponibles($query)
{
    return $query->where('stock', '>', 0);
}
```

Este scope permite consultar únicamente los productos que tienen existencia disponible.

## 13. Seeders

El proyecto incluye datos de prueba para las principales entidades. Se cargan 10 registros por cada una: categorías, clientes, productos, ventas y detalles de venta.

Los seeders se ejecutan desde: `database/seeders/DatabaseSeeder.php`

## 14. Vistas principales

Las vistas del módulo de productos se encuentran en:

```text
resources/views/products/
├── index.blade.php
├── create.blade.php
├── edit.blade.php
└── show.blade.php
```

Estas vistas permiten consultar, crear, editar, ver el detalle y eliminar productos.

## 15. Diseño de interfaz

La interfaz utiliza un diseño limpio con:
- Fondo blanco.
- Detalles en azul.
- Tarjetas informativas.
- Navegación sencilla.
- Formularios claros.
- Diseño adaptable a diferentes tamaños de pantalla.

## 16. Autenticación

La aplicación utiliza Laravel Breeze para implementar:
- Inicio de sesión.
- Registro de usuarios.
- Cierre de sesión.
- Recuperación de contraseña.
- Gestión del perfil.

Las rutas protegidas utilizan el middleware `auth`.

## 17. Instalación y ejecución

Clonar el repositorio:

```bash
git clone <URL_DEL_REPOSITORIO>
cd sge
```

Instalar dependencias:

```bash
composer install
```

Copiar el archivo de entorno:

```bash
cp .env.example .env
```

Generar la clave de aplicación:

```bash
php artisan key:generate
```

Configurar las variables de conexión a MySQL en el archivo `.env`.

Levantar los contenedores:

```bash
./vendor/bin/sail up -d
```

Ejecutar migraciones y seeders:

```bash
./vendor/bin/sail artisan migrate:fresh --seed
```

Compilar los recursos:

```bash
npm install
npm run build
```

Limpiar cachés:

```bash
./vendor/bin/sail artisan optimize:clear
```

La aplicación queda disponible en: [http://localhost](http://localhost)

## 18. Comandos útiles

Levantar el proyecto:
```bash
./vendor/bin/sail up -d
```

Detener el proyecto:
```bash
./vendor/bin/sail down
```

Ver rutas:
```bash
./vendor/bin/sail artisan route:list
```

Ejecutar migraciones:
```bash
./vendor/bin/sail artisan migrate
```

Ejecutar migraciones y seeders desde cero:
```bash
./vendor/bin/sail artisan migrate:fresh --seed
```

Limpiar cachés:
```bash
./vendor/bin/sail artisan optimize:clear
```

## 19. Estructura principal

```text
sge/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   └── Models/
├── database/
│   ├── migrations/
│   └── seeders/
├── docs/
│   ├── analisis.md
│   ├── diccionario.md
│   ├── diagrama_mer.mmd
│   └── diagrama_mer.png
├── resources/
│   └── views/
├── routes/
│   └── web.php
├── public/
├── tests/
├── compose.yaml
├── .env.example
└── README.md
```

## 20. Documentación adicional

- [Análisis empresarial](docs/analisis.md)
- [Diccionario de datos](docs/diccionario.md)
- [Diagrama MER](docs/diagrama_mer.png)
- [Diagrama editable Mermaid](docs/diagrama_mer.mmd)

## 21. Evidencias visuales

Las evidencias de la interfaz se encuentran en la carpeta `docs/visual/`. Entre ellas se incluyen capturas de:
- Landing Page.
- Inicio de sesión / Registro.
- Panel de control y navegación.
- Creación y gestión de productos.



