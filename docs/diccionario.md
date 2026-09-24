# Diccionario de Datos

## Tabla: categories

| Campo | Tipo | Descripción |
|---|---|---|
| id | BIGINT | Identificador único |
| name | VARCHAR(100) | Nombre de la categoría |
| description | TEXT | Descripción de la categoría |
| created_at | TIMESTAMP | Fecha de creación |
| updated_at | TIMESTAMP | Fecha de actualización |

## Tabla: clients

| Campo | Tipo | Descripción |
|---|---|---|
| id | BIGINT | Identificador único |
| name | VARCHAR(150) | Nombre del cliente |
| phone | VARCHAR(20) | Teléfono del cliente |
| email | VARCHAR(150) | Correo electrónico |
| address | VARCHAR(200) | Dirección |
| created_at | TIMESTAMP | Fecha de creación |
| updated_at | TIMESTAMP | Fecha de actualización |

## Tabla: products

| Campo | Tipo | Descripción |
|---|---|---|
| id | BIGINT | Identificador único |
| category_id | BIGINT | Categoría a la que pertenece |
| name | VARCHAR(255) | Nombre del producto |
| code | VARCHAR(100) | Código único |
| price | DECIMAL(12,2) | Precio |
| stock | INT | Cantidad disponible |
| description | TEXT | Descripción |
| created_at | TIMESTAMP | Fecha de creación |
| updated_at | TIMESTAMP | Fecha de actualización |

## Tabla: sales

| Campo | Tipo | Descripción |
|---|---|---|
| id | BIGINT | Identificador único |
| client_id | BIGINT | Cliente asociado |
| date | DATE | Fecha de la venta |
| total | DECIMAL(12,2) | Valor total |
| status | VARCHAR(30) | Estado de la venta |
| created_at | TIMESTAMP | Fecha de creación |
| updated_at | TIMESTAMP | Fecha de actualización |

## Tabla: sale_details

| Campo | Tipo | Descripción |
|---|---|---|
| id | BIGINT | Identificador único |
| sale_id | BIGINT | Venta asociada |
| product_id | BIGINT | Producto asociado |
| quantity | INT | Cantidad del producto |
| unit_price | DECIMAL(12,2) | Precio unitario |
| created_at | TIMESTAMP | Fecha de creación |
| updated_at | TIMESTAMP | Fecha de actualización |

## Relaciones

- `categories.id` → `products.category_id`
- `clients.id` → `sales.client_id`
- `sales.id` → `sale_details.sale_id`
- `products.id` → `sale_details.product_id`
